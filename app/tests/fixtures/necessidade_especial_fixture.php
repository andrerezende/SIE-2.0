<?php
/* NecessidadeEspecial Fixture generated on: 2011-10-13 00:09:03 : 1318475343 */
class NecessidadeEspecialFixture extends CakeTestFixture {
	var $name = 'NecessidadeEspecial';
	var $table = 'necessidade_especial';

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
