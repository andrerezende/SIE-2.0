<?php
class Curso extends AppModel {

	public $name = 'Curso';
	public $useTable = 'curso';
	public $displayField = 'descricao';

	public $hasMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'curso_id',
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
