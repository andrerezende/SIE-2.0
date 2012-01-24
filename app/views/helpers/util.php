<?php
/**
 * UtilHelper
 *
 * @author Vitor Pacheco <vitor.pacheco@ifbaiano.edu.br>
 */
class UtilHelper extends AppHelper {

	/**
	 * Lista de Helpers.
	 *
	 * @var array
	 */
	public $helpers = array(
		'Html',
	);

	/**
	 * Imprime 'Sim' ou 'Não' para variáveis de valor '1' ou '0' repectivamente.
	 *
	 * @param int $field
	 * @return string
	 */
	public function boolean($field) {
		if ($field == 0 || $field == false) {
			return 'Não';
		} else {
			return 'Sim';
		}
	}

	public function imgFromBoolean($field, array $options) {
		$options += array('class' => 'homologacao', 'val' => (int)$field);
		if ($field == 0 || $field == false) {
			return $this->Html->image('icons' . DS . 'onebit_33.png', $options);
		} else {
			return $this->Html->image('icons' . DS . 'onebit_34.png', $options);
		}
	}

}