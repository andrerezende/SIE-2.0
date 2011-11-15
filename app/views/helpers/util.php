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
		if ($field == 0) {
			return 'Não';
		} else {
			return 'Sim';
		}
	}
}