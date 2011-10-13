<?php
class Classificacao extends AppModel {
	var $name = 'Classificacao';
	var $useTable = 'classificacao';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cota' => array(
			'className' => 'Cota',
			'foreignKey' => 'cota_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Lista' => array(
			'className' => 'Lista',
			'joinTable' => 'lista_classificacao',
			'foreignKey' => 'classificacao_id',
			'associationForeignKey' => 'lista_id',
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
