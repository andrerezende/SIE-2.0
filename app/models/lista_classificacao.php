<?php
class ListaClassificacao extends AppModel {

	public $name = 'ListaClassificacao';
	public $useTable = 'lista_classificacao';
	public $displayField = 'id';

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
