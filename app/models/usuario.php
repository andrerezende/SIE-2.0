<?php
class Usuario extends AppModel {

	public $name = 'Usuario';
	public $useTable = 'usuario';
	public $displayField = 'nome';
	public $validate = array(
		'login' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'senha' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $belongsTo = array(
		'Grupo' => array(
			'className' => 'Grupo',
			'foreignKey' => 'grupo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeSave($options = array()) {
		if (isset($this->data['Usuario']['candidato_id']) && !empty($this->data['Usuario']['candidato_id'])) {
			if (isset($this->data['Usuario']['senha']) && !empty($this->data['Usuario']['senha'])) {
				$this->data['Usuario']['senha'] = AuthComponent::password($this->data['Usuario']['senha']);
			}
		}
		return true;
	}

	public function passwordReset($postData = array()) {
		$usuario = $this->find('first', array(
			'conditions' => array(
				$this->alias . '.email' => $postData[$this->alias]['email']
			)
		));
		if (!empty($usuario)) {
			$sixtyMins = time() + 43000;
			$token = $this->generateToken();
			$usuario[$this->alias]['password_token'] = $token;
			$usuario[$this->alias]['email_token_expires'] = date('Y-m-d H:i:s', $sixtyMins);
			$usuario = $this->save($usuario, false);
			return $usuario;
		} else {
			$this->invalidate('Este endereço de email não existe no sistema.');
		}
		return false;
	}

	public function checkPasswordToken($token = null) {
		$usuario = $this->find('first', array(
			'contain' => array(),
			'conditions' => array(
				$this->alias . '.password_token' => $token,
				$this->alias . '.email_token_expires >=' => date('Y-m-d H:i:s'))));
		if (empty($usuario)) {
			return false;
		}
		return $usuario;
	}

	public function resetPassword($postData = array()) {
		$result = false;
		$tmp = $this->validate;
		$this->validate = array(
			'new_password' => $this->validate['passwd'],
			'confirm_password' => array(
				'required' => array(
					'rule' => array('compareFields', 'new_password', 'confirm_password'),
					'message' => __d('users', 'The passwords are not equal.', true))));

		$this->set($postData);
		if ($this->validates()) {
			App::import('Core', 'Security');
			$this->data[$this->alias]['senha'] = Security::hash($this->data[$this->alias]['nova_senha'], null, true);
			$this->data[$this->alias]['password_token'] = null;
			$result = $this->save($this->data, false);
		}
		$this->validate = $tmp;
		return $result;
	}

	public function changePassword($postData = array()) {
		$this->set($postData);
		$tmp = $this->validate;
		$this->validate = $this->validatePasswordChange;
		if ($this->validates()) {
			App::import('Core', 'Security');
			$this->data[$this->alias]['senha'] = Security::hash($this->data[$this->alias]['nova_senha'], null, true);
			$this->save($postData, array(
				'validate' => false,
				'callbacks' => false,
			));
			$this->validate = $tmp;
			return true;
		}
		$this->validate = $tmp;
		return false;
	}

	public function validateOldPassword($password) {
		if (!isset($this->data[$this->alias]['id']) || empty($this->data[$this->alias]['id'])) {
			if (Configure::read('debug') > 0) {
				throw new OutOfBoundsException(__d('users', '$this->data[\'' . $this->alias . '\'][\'id\'] has to be set and not empty', true));
			}
		}

		$senha = $this->field('senha', array($this->alias . '.id' => $this->data[$this->alias]['id']));
		App::import('Core', 'Security');
		if ($senha === Security::hash($password['senha_antiga'], null, true)) {
			return true;
		}
		return false;
	}

	public function compareFields($field1, $field2) {
		if (is_array($field1)) {
			$field1 = key($field1);
		}
		if (isset($this->data[$this->alias][$field1]) && isset($this->data[$this->alias][$field2]) &&
			$this->data[$this->alias][$field1] == $this->data[$this->alias][$field2]) {
			return true;
		}
		return false;
	}

	public function generatePassword($length = 10) {
		srand((double)microtime() * 1000000);
		$password = '';
		$vowels = array("a", "e", "i", "o", "u");
		$cons = array("b", "c", "d", "g", "h", "j", "k", "l", "m", "n", "p", "r", "s", "t", "u", "v", "w", "tr",
							"cr", "br", "fr", "th", "dr", "ch", "ph", "wr", "st", "sp", "sw", "pr", "sl", "cl");
		for ($i = 0; $i < $length; $i++) {
			$password .= $cons[mt_rand(0, 31)] . $vowels[mt_rand(0, 4)];
		}
		return substr($password, 0, $length);
	}

	public function generateToken($length = 10) {
		$possible = '0123456789abcdefghijklmnopqrstuvwxyz';
		$token = "";
		$i = 0;

		while ($i < $length) {
			$char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
			if (!stristr($token, $char)) {
				$token .= $char;
				$i++;
			}
		}
		return $token;
	}

}