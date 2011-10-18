<?php
/* NecessidadeEspeciais Test cases generated on: 2011-10-13 11:28:00 : 1318516080*/
App::import('Controller', 'NecessidadeEspeciais');

class TestNecessidadeEspeciaisController extends NecessidadeEspeciaisController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NecessidadeEspeciaisControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.necessidade_especial', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.estado_civil', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->NecessidadeEspeciais =& new TestNecessidadeEspeciaisController();
		$this->NecessidadeEspeciais->constructClasses();
	}

	function endTest() {
		unset($this->NecessidadeEspeciais);
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
