<?php
/* LocalProvaSelecao Fixture generated on: 2011-12-09 22:51:19 : 1323478279 */
class LocalProvaSelecaoFixture extends CakeTestFixture {
	var $name = 'LocalProvaSelecao';
	var $table = 'local_prova_selecao';

	var $fields = array(
		'selecao_id' => array('type' => 'integer', 'null' => true),
		'local_prova_id' => array('type' => 'integer', 'null' => true),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'selecao_id' => 1,
			'local_prova_id' => 1,
			'id' => 1
		),
	);
}
