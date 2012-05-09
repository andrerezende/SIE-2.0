<?php
class Nota extends AppModel {

	public $name = 'Nota';
	public $useTable = 'nota';
	public $displayField = 'id';

	public $validate = array(
		'valor' => array(
			'notempty' => array(
				'rule' => array('range', -1, 10.01),
				'message' => 'O valor da nota deve estar entre 0 e 10',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
