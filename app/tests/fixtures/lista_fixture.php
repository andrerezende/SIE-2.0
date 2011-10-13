<?php
/* Lista Fixture generated on: 2011-10-13 00:13:35 : 1318475615 */
class ListaFixture extends CakeTestFixture {
	var $name = 'Lista';
	var $table = 'lista';

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
