<?php
class Lista extends AppModel {
	var $name = 'Lista';
	var $useTable = 'lista';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Classificacao' => array(
			'className' => 'Classificacao',
			'joinTable' => 'lista_classificacao',
			'foreignKey' => 'lista_id',
			'associationForeignKey' => 'classificacao_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
