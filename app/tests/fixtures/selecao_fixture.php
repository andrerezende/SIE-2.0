<?php
/* Selecao Fixture generated on: 2011-10-13 11:22:52 : 1318515772 */
class SelecaoFixture extends CakeTestFixture {
	var $name = 'Selecao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'campus_id' => array('type' => 'integer', 'null' => true),
		'curso_id' => array('type' => 'integer', 'null' => true),
		'processo_seletivo_id' => array('type' => 'integer', 'null' => true),
		'ativo_web' => array('type' => 'integer', 'null' => true),
		'vagas' => array('type' => 'integer', 'null' => true),
		'encerrado' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'campus_id' => 1,
			'curso_id' => 1,
			'processo_seletivo_id' => 1,
			'ativo_web' => 1,
			'vagas' => 1,
			'encerrado' => 1
		),
	);
}
