<?php
/* Edital Fixture generated on: 2011-10-13 11:11:55 : 1318515115 */
class EditalFixture extends CakeTestFixture {
	var $name = 'Edital';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'numero' => array('type' => 'integer', 'null' => true),
		'data' => array('type' => 'date', 'null' => true),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'numero' => 1,
			'data' => '2011-10-13',
			'descricao' => 'Lorem ipsum dolor sit amet'
		),
	);
}
