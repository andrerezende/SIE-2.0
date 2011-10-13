<?php
/* LocalProva Fixture generated on: 2011-10-13 11:12:13 : 1318515133 */
class LocalProvaFixture extends CakeTestFixture {
	var $name = 'LocalProva';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet'
		),
	);
}
