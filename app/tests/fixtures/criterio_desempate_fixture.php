<?php
/* CriterioDesempate Fixture generated on: 2012-01-05 11:45:04 : 1325771104 */
class CriterioDesempateFixture extends CakeTestFixture {
	var $name = 'CriterioDesempate';
	var $table = 'criterio_desempate';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'length' => 50),
		'processo_seletivo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'processo_seletivo_id' => 1
		),
	);
}
