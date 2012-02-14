<?php
class ProcessoSeletivo extends AppModel {

	public $name = 'ProcessoSeletivo';
	public $useTable = 'processo_seletivo';
	public $displayField = 'descricao';

	public $belongsTo = array(
		'Edital' => array(
			'className' => 'Edital',
			'foreignKey' => 'edital_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'processo_seletivo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Prova' => array(
			'className' => 'Prova',
			'foreignKey' => 'processo_seletivo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CriterioDesempate' => array(
			'className' => 'CriterioDesempate',
			'foreignKey' => 'processo_seletivo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

	public function getCriteriosDesempate($processo_seletivo_id) {
		$this->CriterioDesempate->contain();
		return $this->CriterioDesempate->find('all', array('conditions' => array('processo_seletivo_id' => $processo_seletivo_id)));
	}

}