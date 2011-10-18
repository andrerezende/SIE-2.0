<?php
/* Notas Test cases generated on: 2011-10-13 11:28:01 : 1318516081*/
App::import('Controller', 'Notas');

class TestNotasController extends NotasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NotasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.nota', 'app.prova', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Notas =& new TestNotasController();
		$this->Notas->constructClasses();
	}

	function endTest() {
		unset($this->Notas);
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
