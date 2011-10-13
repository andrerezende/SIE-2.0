<?php
/* Classificacao Fixture generated on: 2011-10-13 00:12:47 : 1318475567 */
class ClassificacaoFixture extends CakeTestFixture {
	var $name = 'Classificacao';
	var $table = 'classificacao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'ordem' => array('type' => 'integer', 'null' => true),
		'inscricao_id' => array('type' => 'integer', 'null' => true),
		'cota_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'ordem' => 1,
			'inscricao_id' => 1,
			'cota_id' => 1
		),
	);
}
