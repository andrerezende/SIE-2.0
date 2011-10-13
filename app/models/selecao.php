<?php
class Selecao extends AppModel {

	public $name = 'Selecao';
	public $useTable = 'selecao';
	public $displayField = 'id';

	public $belongsTo = array(
		'Campus' => array(
			'className' => 'Campus',
			'foreignKey' => 'campus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProcessoSeletivo' => array(
			'className' => 'ProcessoSeletivo',
			'foreignKey' => 'processo_seletivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SelecaoLocalProva' => array(
			'className' => 'SelecaoLocalProva',
			'foreignKey' => 'selecao_local_prova_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Cota' => array(
			'className' => 'Cota',
			'foreignKey' => 'selecao_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'selecao_id',
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


	public $hasAndBelongsToMany = array(
		'LocalProva' => array(
			'className' => 'LocalProva',
			'joinTable' => 'selecao_local_prova',
			'foreignKey' => 'selecao_id',
			'associationForeignKey' => 'local_prova_id',
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
