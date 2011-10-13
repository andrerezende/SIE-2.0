<?php
/* Cota Fixture generated on: 2011-10-13 00:05:29 : 1318475129 */
class CotaFixture extends CakeTestFixture {
	var $name = 'Cota';
	var $table = 'cota';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 100),
		'quantidade' => array('type' => 'integer', 'null' => true),
		'selecao_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'quantidade' => 1,
			'selecao_id' => 1
		),
	);
}
