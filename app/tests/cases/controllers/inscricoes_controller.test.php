<?php
/* Inscricoes Test cases generated on: 2011-10-13 11:28:07 : 1318516087*/
App::import('Controller', 'Inscricoes');

class TestInscricoesController extends InscricoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InscricoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Inscricoes =& new TestInscricoesController();
		$this->Inscricoes->constructClasses();
	}

	function endTest() {
		unset($this->Inscricoes);
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
