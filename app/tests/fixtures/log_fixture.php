<?php
/* Log Fixture generated on: 2011-10-13 00:00:56 : 1318474856 */
class LogFixture extends CakeTestFixture {
	var $name = 'Log';
	var $table = 'log';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'tabela' => array('type' => 'string', 'null' => true, 'length' => 50),
		'campo' => array('type' => 'string', 'null' => true, 'length' => 50),
		'data' => array('type' => 'datetime', 'null' => true),
		'valor_anterior' => array('type' => 'string', 'null' => true, 'length' => 100),
		'valor_atual' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'tabela' => 'Lorem ipsum dolor sit amet',
			'campo' => 'Lorem ipsum dolor sit amet',
			'data' => '2011-10-13 00:00:56',
			'valor_anterior' => 'Lorem ipsum dolor sit amet',
			'valor_atual' => 'Lorem ipsum dolor sit amet'
		),
	);
}
