<?php
/* UnidadeFederativa Fixture generated on: 2011-10-13 11:19:04 : 1318515544 */
class UnidadeFederativaFixture extends CakeTestFixture {
	var $name = 'UnidadeFederativa';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 200),
		'sigla' => array('type' => 'string', 'null' => true, 'length' => 100),
		'pais_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sigla' => 'Lorem ipsum dolor sit amet',
			'pais_id' => 1
		),
	);
}
