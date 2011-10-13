<?php
/* Campus Fixture generated on: 2011-10-13 11:24:13 : 1318515853 */
class CampusFixture extends CakeTestFixture {
	var $name = 'Campus';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'length' => 50),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet'
		),
	);
}
