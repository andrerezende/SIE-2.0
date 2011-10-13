<?php
/* Sexo Fixture generated on: 2011-10-13 00:08:19 : 1318475299 */
class SexoFixture extends CakeTestFixture {
	var $name = 'Sexo';
	var $table = 'sexo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 9),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem i'
		),
	);
}
