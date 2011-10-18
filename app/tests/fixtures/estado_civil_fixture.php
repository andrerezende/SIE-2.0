<?php
/* EstadoCivil Fixture generated on: 2011-10-13 11:11:58 : 1318515118 */
class EstadoCivilFixture extends CakeTestFixture {
	var $name = 'EstadoCivil';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 20),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor '
		),
	);
}
