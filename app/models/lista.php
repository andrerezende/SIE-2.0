<?php
class Lista extends AppModel {

	public $name = 'Lista';
	public $displayField = 'descricao';

	public $hasAndBelongsToMany = array(
		'Classificacao' => array(
			'className' => 'Classificacao',
			'joinTable' => 'classificacoes_listas',
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
