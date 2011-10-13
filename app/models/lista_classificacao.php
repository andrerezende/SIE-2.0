<?php
class ListaClassificacao extends AppModel {
	var $name = 'ListaClassificacao';
	var $useTable = 'lista_classificacao';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
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
