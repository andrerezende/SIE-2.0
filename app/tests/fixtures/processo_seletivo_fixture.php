<?php
/* ProcessoSeletivo Fixture generated on: 2011-09-27 14:24:05 : 1317144245 */
class ProcessoSeletivoFixture extends CakeTestFixture {
	var $name = 'ProcessoSeletivo';
	var $table = 'processo_seletivo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'edital_id' => array('type' => 'integer', 'null' => true),
		'data_inicio_inscricoes' => array('type' => 'date', 'null' => true),
		'data_fim_inscricoes' => array('type' => 'date', 'null' => true),
		'hora_inicio_inscricoes' => array('type' => 'time', 'null' => true),
		'hora_fim_inscricoes' => array('type' => 'time', 'null' => true),
		'ativo_web' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'edital_id' => 1,
			'data_inicio_inscricoes' => '2011-09-27',
			'data_fim_inscricoes' => '2011-09-27',
			'hora_inicio_inscricoes' => '14:24:05',
			'hora_fim_inscricoes' => '14:24:05',
			'ativo_web' => 1
		),
	);
}
