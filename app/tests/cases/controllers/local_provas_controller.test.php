<?php
/* LocalProvas Test cases generated on: 2011-10-13 11:27:57 : 1318516077*/
App::import('Controller', 'LocalProvas');

class TestLocalProvasController extends LocalProvasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LocalProvasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.local_prova', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.nota', 'app.prova', 'app.lista', 'app.classificacoes_lista', 'app.local_provas_selecao');

	function startTest() {
		$this->LocalProvas =& new TestLocalProvasController();
		$this->LocalProvas->constructClasses();
	}

	function endTest() {
		unset($this->LocalProvas);
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
