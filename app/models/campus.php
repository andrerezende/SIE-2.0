<?php
class Campus extends AppModel {

	public $name = 'Campus';
	public $displayField = 'nome';

	public $hasMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'campus_id',
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
