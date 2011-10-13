<?php
/* Nota Fixture generated on: 2011-10-13 11:20:06 : 1318515606 */
class NotaFixture extends CakeTestFixture {
	var $name = 'Nota';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'valor' => array('type' => 'float', 'null' => true),
		'prova_id' => array('type' => 'integer', 'null' => true),
		'inscricao_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'valor' => 1,
			'prova_id' => 1,
			'inscricao_id' => 1
		),
	);
}
