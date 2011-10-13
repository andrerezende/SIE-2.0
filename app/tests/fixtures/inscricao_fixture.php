<?php
/* Inscricao Fixture generated on: 2011-10-13 11:27:45 : 1318516065 */
class InscricaoFixture extends CakeTestFixture {
	var $name = 'Inscricao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'candidato_id' => array('type' => 'integer', 'null' => true),
		'selecao_id' => array('type' => 'integer', 'null' => true),
		'data' => array('type' => 'date', 'null' => true),
		'especial_prova' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'candidato_id' => 1,
			'selecao_id' => 1,
			'data' => '2011-10-13',
			'especial_prova' => 1
		),
	);
}
