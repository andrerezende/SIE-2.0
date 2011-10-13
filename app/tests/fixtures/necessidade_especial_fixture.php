<?php
/* NecessidadeEspecial Fixture generated on: 2011-10-13 11:19:45 : 1318515585 */
class NecessidadeEspecialFixture extends CakeTestFixture {
	var $name = 'NecessidadeEspecial';

	var $fields = array(
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 40),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'descricao' => 'Lorem ipsum dolor sit amet',
			'id' => 1
		),
	);
}
