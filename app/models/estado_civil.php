<?php
class EstadoCivil extends AppModel {

	public $name = 'EstadoCivil';
	public $useTable = 'estado_civil';
	public $displayField = 'descricao';

	public $hasMany = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'estado_civil_id',
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
