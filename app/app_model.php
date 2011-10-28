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

}