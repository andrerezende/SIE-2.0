<?php
class Prova extends AppModel {
	var $name = 'Prova';
	var $useTable = 'prova';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'prova_id',
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


	var $hasAndBelongsToMany = array(
		'Local' => array(
			'className' => 'Local',
			'joinTable' => 'local_prova',
			'foreignKey' => 'prova_id',
			'associationForeignKey' => 'local_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'SelecaoLocal' => array(
			'className' => 'SelecaoLocal',
			'joinTable' => 'selecao_local_prova',
			'foreignKey' => 'prova_id',
			'associationForeignKey' => 'selecao_local_id',
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
