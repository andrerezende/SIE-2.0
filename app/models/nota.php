<?php
class Nota extends AppModel {

	public $name = 'Nota';
	public $useTable = 'nota';
	public $displayField = 'id';

	public $belongsTo = array(
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
