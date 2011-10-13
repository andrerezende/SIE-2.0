<?php
/* LocalProva Fixture generated on: 2011-10-12 23:25:29 : 1318472729 */
class LocalProvaFixture extends CakeTestFixture {
	var $name = 'LocalProva';
	var $table = 'local_prova';

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
