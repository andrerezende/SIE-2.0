<?php
/* Selecoes Test cases generated on: 2011-12-15 00:49:48 : 1323917388*/
App::import('Controller', 'Selecoes');

class TestSelecoesController extends SelecoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SelecoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.boleto', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.usuario', 'app.grupo', 'app.local_prova', 'app.local_prova_selecao', 'app.nota', 'app.prova', 'app.lista', 'app.classificacao_lista');

	function startTest() {
		$this->Selecoes =& new TestSelecoesController();
		$this->Selecoes->constructClasses();
	}

	function endTest() {
		unset($this->Selecoes);
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
