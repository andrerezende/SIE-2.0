<?php
/* EstadoCivis Test cases generated on: 2011-10-13 11:27:55 : 1318516075*/
App::import('Controller', 'EstadoCivis');

class TestEstadoCivisController extends EstadoCivisController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EstadoCivisControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.estado_civil', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->EstadoCivis =& new TestEstadoCivisController();
		$this->EstadoCivis->constructClasses();
	}

	function endTest() {
		unset($this->EstadoCivis);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
