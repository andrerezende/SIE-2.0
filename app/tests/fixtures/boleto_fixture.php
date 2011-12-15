<?php
/* Boleto Fixture generated on: 2011-12-15 01:11:36 : 1323918696 */
class BoletoFixture extends CakeTestFixture {
	var $name = 'Boleto';
	var $table = 'boleto';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'agencia' => array('type' => 'float', 'null' => true),
		'conta' => array('type' => 'float', 'null' => true),
		'convenio' => array('type' => 'float', 'null' => true),
		'contrato' => array('type' => 'float', 'null' => true),
		'carteira' => array('type' => 'integer', 'null' => true),
		'variacao_carteira' => array('type' => 'string', 'null' => true, 'length' => 4),
		'formatacao_convenio' => array('type' => 'integer', 'null' => true),
		'formatacao_nosso_numero' => array('type' => 'integer', 'null' => true),
		'identificacao' => array('type' => 'string', 'null' => true, 'length' => 150),
		'cpf_cnpj' => array('type' => 'string', 'null' => true, 'length' => 18),
		'endereco' => array('type' => 'string', 'null' => true, 'length' => 200),
		'cidade_uf' => array('type' => 'string', 'null' => true, 'length' => 90),
		'cedente' => array('type' => 'string', 'null' => true, 'length' => 150),
		'dias_vencimento' => array('type' => 'integer', 'null' => true),
		'taxa' => array('type' => 'float', 'null' => true),
		'demonstrativo1' => array('type' => 'string', 'null' => true, 'length' => 150),
		'demonstrativo2' => array('type' => 'string', 'null' => true, 'length' => 150),
		'demonstrativo3' => array('type' => 'string', 'null' => true, 'length' => 150),
		'instrucoes1' => array('type' => 'string', 'null' => true, 'length' => 150),
		'instrucoes2' => array('type' => 'string', 'null' => true, 'length' => 150),
		'instrucoes3' => array('type' => 'string', 'null' => true, 'length' => 150),
		'instrucoes4' => array('type' => 'string', 'null' => true, 'length' => 150),
		'quantidade' => array('type' => 'integer', 'null' => true),
		'valor_unitario' => array('type' => 'float', 'null' => true),
		'aceite' => array('type' => 'string', 'null' => true, 'length' => 1),
		'especie' => array('type' => 'string', 'null' => true, 'length' => 4),
		'especie_doc' => array('type' => 'string', 'null' => true, 'length' => 2),
		'selecao_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'agencia' => 1,
			'conta' => 1,
			'convenio' => 1,
			'contrato' => 1,
			'carteira' => 1,
			'variacao_carteira' => 'Lo',
			'formatacao_convenio' => 1,
			'formatacao_nosso_numero' => 1,
			'identificacao' => 'Lorem ipsum dolor sit amet',
			'cpf_cnpj' => 'Lorem ipsum dolo',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'cidade_uf' => 'Lorem ipsum dolor sit amet',
			'cedente' => 'Lorem ipsum dolor sit amet',
			'dias_vencimento' => 1,
			'taxa' => 1,
			'demonstrativo1' => 'Lorem ipsum dolor sit amet',
			'demonstrativo2' => 'Lorem ipsum dolor sit amet',
			'demonstrativo3' => 'Lorem ipsum dolor sit amet',
			'instrucoes1' => 'Lorem ipsum dolor sit amet',
			'instrucoes2' => 'Lorem ipsum dolor sit amet',
			'instrucoes3' => 'Lorem ipsum dolor sit amet',
			'instrucoes4' => 'Lorem ipsum dolor sit amet',
			'quantidade' => 1,
			'valor_unitario' => 1,
			'aceite' => 'Lorem ipsum dolor sit ame',
			'especie' => 'Lo',
			'especie_doc' => '',
			'selecao_id' => 1
		),
	);
}
