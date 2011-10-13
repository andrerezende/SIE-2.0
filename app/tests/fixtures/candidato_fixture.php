<?php
/* Candidato Fixture generated on: 2011-10-13 00:19:31 : 1318475971 */
class CandidatoFixture extends CakeTestFixture {
	var $name = 'Candidato';
	var $table = 'candidato';

	var $fields = array(
		'nome' => array('type' => 'string', 'null' => false, 'length' => 100),
		'cpf' => array('type' => 'string', 'null' => false, 'length' => 20),
		'rg' => array('type' => 'string', 'null' => false, 'length' => 20),
		'endereco' => array('type' => 'string', 'null' => false, 'length' => 100),
		'data_expedicao' => array('type' => 'date', 'null' => false),
		'data_nascimento' => array('type' => 'date', 'null' => false),
		'bairro' => array('type' => 'string', 'null' => false, 'length' => 50),
		'unidade_federativa_id' => array('type' => 'integer', 'null' => false),
		'municipio_id' => array('type' => 'integer', 'null' => false),
		'pais_id' => array('type' => 'integer', 'null' => false),
		'naturalidade_municipio_id' => array('type' => 'integer', 'null' => false),
		'orgao_expedidor_unidade_federativa_id' => array('type' => 'integer', 'null' => false),
		'sexo_id' => array('type' => 'integer', 'null' => false),
		'orgao_expedidor' => array('type' => 'string', 'null' => false, 'length' => 20),
		'nacionalidade_pais_id' => array('type' => 'integer', 'null' => false),
		'cep' => array('type' => 'string', 'null' => false, 'length' => 8),
		'telefone' => array('type' => 'string', 'null' => false, 'length' => 10),
		'celular' => array('type' => 'string', 'null' => false, 'length' => 10),
		'email' => array('type' => 'string', 'null' => true, 'length' => 50),
		'necessidade_especial_id' => array('type' => 'integer', 'null' => false),
		'estado_civil_id' => array('type' => 'integer', 'null' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'cpf_uq' => array('unique' => true, 'column' => 'cpf')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'nome' => 'Lorem ipsum dolor sit amet',
			'cpf' => 'Lorem ipsum dolor ',
			'rg' => 'Lorem ipsum dolor ',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'data_expedicao' => '2011-10-13',
			'data_nascimento' => '2011-10-13',
			'bairro' => 'Lorem ipsum dolor sit amet',
			'unidade_federativa_id' => 1,
			'municipio_id' => 1,
			'pais_id' => 1,
			'naturalidade_municipio_id' => 1,
			'orgao_expedidor_unidade_federativa_id' => 1,
			'sexo_id' => 1,
			'orgao_expedidor' => 'Lorem ipsum dolor ',
			'nacionalidade_pais_id' => 1,
			'cep' => 'Lorem ',
			'telefone' => 'Lorem ip',
			'celular' => 'Lorem ip',
			'email' => 'Lorem ipsum dolor sit amet',
			'necessidade_especial_id' => 1,
			'estado_civil_id' => 1,
			'id' => 1
		),
	);
}
