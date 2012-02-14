<?php
class CriterioDesempate extends AppModel {
	public $name = 'CriterioDesempate';
	public $useTable = 'criterio_desempate';
	public $displayField = 'nome';
	public $validate = array(
		'processo_seletivo_id' => array(
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
		'ProcessoSeletivo' => array(
			'className' => 'ProcessoSeletivo',
			'foreignKey' => 'processo_seletivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
