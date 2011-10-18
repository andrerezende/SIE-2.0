<?php
/* Prova Fixture generated on: 2011-10-13 11:18:34 : 1318515514 */
class ProvaFixture extends CakeTestFixture {
	var $name = 'Prova';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 100),
		'peso' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'peso' => 1
		),
	);
}
