<?php
/* ClassificacoesLista Fixture generated on: 2011-10-13 11:12:06 : 1318515126 */
class ClassificacoesListaFixture extends CakeTestFixture {
	var $name = 'ClassificacoesLista';

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
