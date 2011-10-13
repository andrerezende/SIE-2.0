<?php
class Nota extends AppModel {
	var $name = 'Nota';
	var $useTable = 'nota';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Prova' => array(
			'className' => 'Prova',
			'foreignKey' => 'prova_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
