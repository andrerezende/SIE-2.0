<?php
class ClassificacoesLista extends AppModel {

	public $name = 'ClassificacoesLista';

	public $belongsTo = array(
		'Classificacao' => array(
			'className' => 'Classificacao',
			'foreignKey' => 'classificacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lista' => array(
			'className' => 'Lista',
			'foreignKey' => 'lista_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
