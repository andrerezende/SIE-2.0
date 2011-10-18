<?php
/* Classificacoes Test cases generated on: 2011-10-13 11:28:06 : 1318516086*/
App::import('Controller', 'Classificacoes');

class TestClassificacoesController extends ClassificacoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClassificacoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova', 'app.lista', 'app.classificacoes_lista');

	function startTest() {
		$this->Classificacoes =& new TestClassificacoesController();
		$this->Classificacoes->constructClasses();
	}

	function endTest() {
		unset($this->Classificacoes);
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
