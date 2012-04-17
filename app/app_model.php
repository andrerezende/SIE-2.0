<?php
/**
 * Model da aplicação.
 *
 * Adicione seus métodos nesta classe, e seus models vão herdá-los.
 *
 * @package       portal.ochef
 * @subpackage    portal.ochef.app
 */
App::import('Lib', 'LazyModel.LazyModel');
class AppModel extends LazyModel {

	/**
	 * Lista dos behaviors a serem carregados quando o model é iniciado.
	 * Configurações podem ser passadas para o behavior usando o nome do mesmo
	 * como um index. Ex.:
	 *
	 * var $actsAs = array(
	 *	'Translate',
	 *	'MyBehavior' => array(
	 *		'setting1' => 'value1'
	 *	)
	 * );
	 *
	 * @var array
	 * @access public
	 */
	public $actsAs = array(
		'Containable',
		'Search.Searchable',
	);

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->order = array($this->alias . '.id ASC');
	}

	public function begin() {
		$db =& ConnectionManager::getDataSource($this->useDbConfig);
		$db->begin($this);
	}

	public function commit() {
		$db =& ConnectionManager::getDataSource($this->useDbConfig);
		$db->commit($this);
	}

	public function rollback() {
		$db =& ConnectionManager::getDataSource($this->useDbConfig);
		$db->rollback($this);
	}

}
