<?php
/**
 * Controller da aplicação.
 *
 * Adicione seus métodos nesta classe, e seus controllers vão herdá-los.
 *
 * @package       cake
 * @subpackage    cake.app
 *
 * @property AuthComponent $Auth
 * @property BoletoBbComponent $BoletoBb
 * @property EmailComponent $Email
 * @property RequestHandlerComponent $RequestHandler
 * @property PrgComponent $Prg
 * @property SessionComponent $Session
 */
class AppController extends Controller {

	public $view = 'Theme';

	public $theme = 'ifbaiano';

    /**
	 * Helpers globais.
	 *
	 * @see http://book.cakephp.org/view/1096/Using-Helpers
	 * @access public
	 * @var array
	 */
	public $helpers = array(
		'CakePtbr.Formatacao',
		'Form',
		'Html',
		'Js' => 'Jquery',
		'Session',
		'Text',
		'Time',
		'Util',
		'MyPaginator',
	);

	/**
	 * Array contendo os nomes dos componentes que este controller utiliza.
	 * Os nomes não devem conter a parte "Component" do nome da classe.
	 *
	 * @var array
	 * @access public
	 */
	public $components = array(
		'Auth',
		'BoletosBb.BoletoBb',
		'Email',
		'RequestHandler',
		'Search.Prg',
		'Session',
	);

	/**
	 * Método construtor.
	 *
	 * @access public
	 */
	public function __construct() {
		if (Configure::read('debug')) {
			$this->components[] = 'DebugKit.Toolbar';
			App::import('Vendor', 'DebugKit.FireCake');
		}
		parent::__construct();
	}

	public function beforeFilter() {
		$this->_setUpAuth();
		$this->_setUpUser();
		$this->_chageLayout();
		$this->_configureEmail();
		if ($this->action == 'login') {
			$this->Auth->autoRedirect = false;
		}
	}

	protected function _setUpAuth() {
		$this->Auth->authorize = 'controller';
//		$this->Auth->actionPath = 'controllers/';
		$this->_setUpAuthModel();
		$this->_setUpAuthActions();
	}

	protected function _setUpUser() {
		if ($this->Auth->user()) {
			$this->set('userData', $this->Auth->user());
		}
	}

	protected function _setUpAuthModel() {
		$this->Auth->userModel = 'Usuario';
		$this->Auth->fields = array(
			'username' => 'login',
			'password' => 'senha',
		);
		$this->Auth->userScope = array();
	}

	protected function _setUpAuthActions() {
		$this->Auth->allowedActions = array('display');
		$this->Auth->loginAction = array(
			'admin' => false,
			'controller' => 'usuarios',
			'action' => 'login',
		);
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginRedirect = array(
			'admin' => true,
			'controller' => 'usuarios',
			'action' => 'index',
		);
	}

	protected function _configureEmail() {
		$this->Email->smtpOptions = array(
			'port' => 25,
			'timeout' => 30,
			'host' => 'smtp.ifbaiano.edu.br',
		);
		$this->Email->delivery = 'smtp';
		$this->set('smtp_errors', $this->Email->smtpError);
	}

	protected function _chageLayout() {
		if (isset($this->params['prefix'])
				&& $this->params['prefix'] == 'admin') {
			$this->layout = 'admin';
		} else {
			$this->layout = 'default';
		}
	}

	public function isAuthorized() {
		if (strpos($this->action, 'admin_') !== false) {
			if ($this->Auth->user('grupo_id') == 2) {
				return true;
			}
		} elseif (strpos($this->action, 'candidato_') !== false) {
			if ($this->Auth->user('grupo_id') == 1) {
				return true;
			}
		} elseif (strpos($this->action, 'ajax_') !== false) {
			return true;
		}
		return false;
	}

	/**
	 * Find numeric index of a key in an array.
	 *
	 * @access public
	 * @param array $arr
	 * @param mixed $key
	 * @return int
	 */
	public function array_key_index(&$arr, $key) {
		$i = 0;
		$arr_keys = array_keys($arr);
		foreach ($arr_keys as $k) {
			if ($k == $key) {
				return $i;
			}
			$i++;
		}
	}
}
