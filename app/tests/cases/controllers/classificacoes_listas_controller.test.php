<?php
/* ClassificacoesListas Test cases generated on: 2011-10-13 11:27:56 : 1318516076*/
App::import('Controller', 'ClassificacoesListas');

class TestClassificacoesListasController extends ClassificacoesListasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClassificacoesListasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.classificacoes_lista', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova', 'app.lista');

	function startTest() {
		$this->ClassificacoesListas =& new TestClassificacoesListasController();
		$this->ClassificacoesListas->constructClasses();
	}

	function endTest() {
		unset($this->ClassificacoesListas);
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
