<?php
/* Candidatos Test cases generated on: 2011-10-13 11:28:06 : 1318516086*/
App::import('Controller', 'Candidatos');

class TestCandidatosController extends CandidatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CandidatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Candidatos =& new TestCandidatosController();
		$this->Candidatos->constructClasses();
	}

	function endTest() {
		unset($this->Candidatos);
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
