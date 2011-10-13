<?php
/* Cursos Test cases generated on: 2011-10-13 11:27:56 : 1318516076*/
App::import('Controller', 'Cursos');

class TestCursosController extends CursosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CursosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curso', 'app.selecao', 'app.campus', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.nota', 'app.prova', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Cursos =& new TestCursosController();
		$this->Cursos->constructClasses();
	}

	function endTest() {
		unset($this->Cursos);
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
