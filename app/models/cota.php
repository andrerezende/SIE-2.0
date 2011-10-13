<?php
class Cota extends AppModel {

	public $name = 'Cota';

	public $belongsTo = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Classificacao' => array(
			'className' => 'Classificacao',
			'foreignKey' => 'cota_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
