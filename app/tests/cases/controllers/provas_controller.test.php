<?php
/* Provas Test cases generated on: 2011-10-13 11:27:58 : 1318516078*/
App::import('Controller', 'Provas');

class TestProvasController extends ProvasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProvasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.prova', 'app.nota', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Provas =& new TestProvasController();
		$this->Provas->constructClasses();
	}

	function endTest() {
		unset($this->Provas);
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
