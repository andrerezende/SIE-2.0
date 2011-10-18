<?php
class Pagamento extends AppModel {
	public $name = 'Pagamento';
	public $useTable = 'pagamento';
	public $displayField = 'arqretorno';
	public $validate = array(
		'inscricao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $belongsTo = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
