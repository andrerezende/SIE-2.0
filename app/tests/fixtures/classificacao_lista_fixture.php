<?php
/* ClassificacaoLista Fixture generated on: 2011-10-17 15:14:08 : 1318871648 */
class ClassificacaoListaFixture extends CakeTestFixture {
	var $name = 'ClassificacaoLista';
	var $table = 'classificacao_lista';

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
			'data' => '2011-10-17'
		),
	);
}
