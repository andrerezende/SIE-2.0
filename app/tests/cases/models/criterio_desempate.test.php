<?php
/* CriterioDesempate Test cases generated on: 2012-01-05 11:45:04 : 1325771104*/
App::import('Model', 'CriterioDesempate');

class CriterioDesempateTestCase extends CakeTestCase {
	var $fixtures = array('app.criterio_desempate', 'app.processo_seletivo', 'app.edital', 'app.selecao', 'app.campus', 'app.curso', 'app.boleto', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.usuario', 'app.grupo', 'app.local_prova', 'app.local_prova_selecao', 'app.nota', 'app.prova', 'app.lista', 'app.classificacao_lista');

	function startTest() {
		$this->CriterioDesempate =& ClassRegistry::init('CriterioDesempate');
	}

	function endTest() {
		unset($this->CriterioDesempate);
		ClassRegistry::flush();
	}

}
