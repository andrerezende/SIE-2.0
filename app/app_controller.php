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
	}

	protected function _setUpAuth() {
//		$this->Auth->authorize = 'actions';
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
	}

	protected function _setUpAuthActions() {
		$this->Auth->allowedActions = array('display');
		$this->Auth->loginAction = array(
			'admin' => false,
			'controller' => 'usuarios',
			'action' => 'login',
		);
		$this->Auth->logoutRedirect = array(
			'admin' => false,
			'controller' => 'usuarios',
			'action' => 'login',
		);
//		$this->Auth->loginRedirect = array(
//			'admin' => false,
//			'controller' => 'usuarios',
//			'action' => 'dashboard',
//		);
	}

}