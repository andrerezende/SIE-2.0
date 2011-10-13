<?php
/* Listas Test cases generated on: 2011-10-13 11:28:04 : 1318516084*/
App::import('Controller', 'Listas');

class TestListasController extends ListasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ListasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lista', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova', 'app.classificacoes_lista');

	function startTest() {
		$this->Listas =& new TestListasController();
		$this->Listas->constructClasses();
	}

	function endTest() {
		unset($this->Listas);
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
