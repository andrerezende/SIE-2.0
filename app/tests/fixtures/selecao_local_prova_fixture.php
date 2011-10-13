<?php
/* SelecaoLocalProva Fixture generated on: 2011-10-13 00:06:54 : 1318475214 */
class SelecaoLocalProvaFixture extends CakeTestFixture {
	var $name = 'SelecaoLocalProva';
	var $table = 'selecao_local_prova';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'selecao_id' => array('type' => 'integer', 'null' => true),
		'local_prova_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'selecao_id' => 1,
			'local_prova_id' => 1
		),
	);
}
