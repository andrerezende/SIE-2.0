<?php
/* Municipio Fixture generated on: 2011-10-13 00:09:42 : 1318475382 */
class MunicipioFixture extends CakeTestFixture {
	var $name = 'Municipio';
	var $table = 'municipio';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'unidade_federativa_id' => array('type' => 'integer', 'null' => true),
		'nome' => array('type' => 'string', 'null' => true, 'length' => 200),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'unidade_federativa_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet'
		),
	);
}
