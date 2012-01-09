<?php
/* CriterioDesempates Test cases generated on: 2012-01-05 11:45:29 : 1325771129*/
App::import('Controller', 'CriterioDesempates');

class TestCriterioDesempatesController extends CriterioDesempatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CriterioDesempatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.criterio_desempate', 'app.processo_seletivo', 'app.edital', 'app.selecao', 'app.campus', 'app.curso', 'app.boleto', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.usuario', 'app.grupo', 'app.local_prova', 'app.local_prova_selecao', 'app.nota', 'app.prova', 'app.lista', 'app.classificacao_lista');

	function startTest() {
		$this->CriterioDesempates =& new TestCriterioDesempatesController();
		$this->CriterioDesempates->constructClasses();
	}

	function endTest() {
		unset($this->CriterioDesempates);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
