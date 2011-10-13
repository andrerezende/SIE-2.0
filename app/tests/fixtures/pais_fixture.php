<?php
/* Pais Fixture generated on: 2011-10-13 00:16:09 : 1318475769 */
class PaisFixture extends CakeTestFixture {
	var $name = 'Pais';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'length' => 200),
		'nacionalidade' => array('type' => 'string', 'null' => true, 'length' => 200),
		'sigla' => array('type' => 'string', 'null' => true, 'length' => 50),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'nacionalidade' => 'Lorem ipsum dolor sit amet',
			'sigla' => 'Lorem ipsum dolor sit amet'
		),
	);
}
