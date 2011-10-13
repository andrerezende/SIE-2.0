<?php
/* ListaClassificacao Fixture generated on: 2011-10-13 00:04:45 : 1318475085 */
class ListaClassificacaoFixture extends CakeTestFixture {
	var $name = 'ListaClassificacao';
	var $table = 'lista_classificacao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'classificacao_id' => array('type' => 'integer', 'null' => true),
		'lista_id' => array('type' => 'integer', 'null' => true),
		'data' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'classificacao_id' => 1,
			'lista_id' => 1,
			'data' => '2011-10-13'
		),
	);
}
