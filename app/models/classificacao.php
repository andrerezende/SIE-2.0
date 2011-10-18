<?php
class Classificacao extends AppModel {

	public $name = 'Classificacao';
	public $useTable = 'classificacao';
	public $displayField = 'id';

	public $belongsTo = array(
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

	public $hasAndBelongsToMany = array(
		'Lista' => array(
			'className' => 'Lista',
			'joinTable' => 'classificacao_lista',
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
