<?php
class Inscricao extends AppModel {

	public $name = 'Inscricao';
	public $useTable = 'inscricao';
//	public $virtualFields = array(
//		'nome' => 'Candidato.nome',
//	);
	public $displayField = 'id';

	public $belongsTo = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'candidato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LocalProva' => array(
			'className' => 'LocalProva',
			'foreignKey' => 'local_prova_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'inscricao_id',
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
		'Classificacao' => array(
			'className' => 'Classificacao',
			'foreignKey' => 'inscricao_id',
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

}
