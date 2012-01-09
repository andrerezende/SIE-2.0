<?php
class CriterioDesempate extends AppModel {
	var $name = 'CriterioDesempate';
	var $useTable = 'criterio_desempate';
	var $displayField = 'nome';
	var $validate = array(
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
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ProcessoSeletivo' => array(
			'className' => 'ProcessoSeletivo',
			'foreignKey' => 'processo_seletivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
