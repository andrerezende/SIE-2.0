<?php
/* Pagamento Fixture generated on: 2011-10-14 10:30:47 : 1318599047 */
class PagamentoFixture extends CakeTestFixture {
	var $name = 'Pagamento';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'inscricao_id' => array('type' => 'integer', 'null' => false),
		'arqretorno' => array('type' => 'string', 'null' => true),
		'data_pagamento' => array('type' => 'date', 'null' => true),
		'data_retorno' => array('type' => 'date', 'null' => true),
		'data_importacao' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'inscricao_id' => 1,
			'arqretorno' => 'Lorem ipsum dolor sit amet',
			'data_pagamento' => '2011-10-14',
			'data_retorno' => '2011-10-14',
			'data_importacao' => '2011-10-14'
		),
	);
}
