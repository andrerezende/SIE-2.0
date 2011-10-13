<?php
class Sexo extends AppModel {

	public $name = 'Sexo';
	public $useTable = 'sexo';
	public $displayField = 'descricao';

	public $hasMany = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'sexo_id',
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
