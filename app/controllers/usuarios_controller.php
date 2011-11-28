<?php
/**
 * Usuarios controller.
 *
 * @property Usuario $Usuario
 * @property AuthComponent $Auth
 */
class UsuariosController extends AppController {

	public $name = 'Usuarios';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'recuperar_senha');
	}

	public function admin_index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
		$grupos = $this->Usuario->Grupo->find('list');
		$this->set(compact('grupos'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
		$grupos = $this->Usuario->Grupo->find('list');
		$this->set(compact('grupos'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Usuario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function login() {
		if ($this->Auth->user()) {
			if ($this->Auth->user('grupo_id') == 1) {
				$this->redirect($this->Auth->redirect(array(
					'candidato' => true,
					'controller' => 'candidatos',
					'action' => 'editar',
					$this->Auth->user('candidato_id')
				)));
			} elseif ($this->Auth->user('grupo_id') == 2) {
				$this->redirect($this->Auth->redirect(array(
					'admin' => true,
					'controller' => 'usuarios',
					'action' => 'index'
				)));
			}
		}
		if ($this->Session->read('Auth.redirect') == '/candidato/editar') {
			$this->set('isCandidato', true);
		} else {
			$this->set('isCandidato', false);
		}
	}

	public function admin_logout() {
		$this->Session->setFlash('Logout');
		$this->redirect($this->Auth->logout());
	}

	public function recuperar_senha($token = null, $usuario = null) {
		if (empty($token)) {
			$admin = false;
			if ($usuario) {
				$this->data = $usuario;
				$admin = true;
			}
			$this->_sendPasswordReset($admin);
		} else {
			$this->__resetPassword($token);
		}
	}

	public function _sendPasswordReset($admin = null, $options = array()) {
		$defaults = array(
			'from' => 'noreply@' . env('HTTP_HOST'),
			'subject' => 'Recuperação de Senha',
			'template' => 'password_reset_request',
		);
		$options = array_merge($defaults, $options);

		if (!empty($this->data)) {
			$usuario = $this->Usuario->passwordReset($this->data);
			if (!empty($usuario)) {
				$this->set('token', $usuario['Usuario']['password_token']);
				//TODO buscar o email do candidato
				$this->Email->to = $usuario['Usuario']['email'];
				$this->Email->from = $options['from'];
				$this->Email->subject = $options['subject'];
				$this->Email->template = $options['template'];
				$this->Email->send();


				if ($admin) {
					$this->Session->setFlash('Um email foi enviado com instruções para a alteração de senha');
					$this->redirect(array('action' => 'index', 'admin' => true));
				} else {
					$this->Session->setFlash('Você deve receber um email com novas instruções em breve');
					$this->redirect(array('action' => 'login'));
				}
			} else {
				$this->Session->setFlash('Nenhum usuário foi encontrado com esse e-mail');
				$this->redirect($this->referer('/'));
			}
		}
		$this->render('request_password_change');
	}

	private function __resetPassword($token) {
		$usuario = $this->Usuario->checkPasswordToken($token);
		if (empty($usuario)) {
			$this->Session->setFlash('Token inválido. Por favor, tente novamente.');
			$this->redirect(array('action' => 'recuperar_senha'));
		}
		if (!empty($this->data)) {
			if ($this->Usuario->resetPassword(Set::merge($usuario, $this->data))) {
				$this->Session->setFlash(__d('users', 'Senha alterada, agora você pode logar com sua nova senha.', true));
				$this->redirect($this->Auth->loginAction);
			}
		}
		$this->set('token', $token);
	}
}