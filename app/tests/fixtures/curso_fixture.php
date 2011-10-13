<?php
/* Curso Fixture generated on: 2011-10-12 23:38:06 : 1318473486 */
class CursoFixture extends CakeTestFixture {
	var $name = 'Curso';
	var $table = 'curso';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 100),
		'sigla' => array('type' => 'string', 'null' => true, 'length' => 10),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sigla' => 'Lorem ip'
		),
	);
}
