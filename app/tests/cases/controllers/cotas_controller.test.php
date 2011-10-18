<?php
/* Cotas Test cases generated on: 2011-10-13 11:27:54 : 1318516074*/
App::import('Controller', 'Cotas');

class TestCotasController extends CotasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CotasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cota', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.nota', 'app.prova', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Cotas =& new TestCotasController();
		$this->Cotas->constructClasses();
	}

	function endTest() {
		unset($this->Cotas);
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
