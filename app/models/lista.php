<?php
class Lista extends AppModel {

	public $name = 'Lista';
	public $useTable = 'lista';
	public $displayField = 'descricao';

	public $hasAndBelongsToMany = array(
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
