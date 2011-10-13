<?php
/* Usuario Fixture generated on: 2011-10-13 11:23:54 : 1318515834 */
class UsuarioFixture extends CakeTestFixture {
	var $name = 'Usuario';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'length' => 50),
		'login' => array('type' => 'string', 'null' => false, 'length' => 50),
		'senha' => array('type' => 'string', 'null' => true, 'length' => 50),
		'grupo_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'login_uq' => array('unique' => true, 'column' => 'login')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'login' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'grupo_id' => 1
		),
	);
}
