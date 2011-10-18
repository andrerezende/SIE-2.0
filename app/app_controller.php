<?php
/**
 * Controller da aplicação.
 *
 * Adicione seus métodos nesta classe, e seus controllers vão herdá-los.
 *
 * @package       cake
 * @subpackage    cake.app
 *
 * @property PrgComponent $Prg
 * @property SessionComponent $Session
 */
class AppController extends Controller {

	public $view = 'Theme';

	public $theme = 'ifbaiano';

	/**
	 * Array contendo os nomes dos componentes que este controller utiliza.
	 * Os nomes não devem conter a parte "Component" do nome da classe.
	 *
	 * @var array
	 * @access public
	 */
	public $components = array(
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

}