<?php
/* Campus Test cases generated on: 2011-10-13 11:28:03 : 1318516083*/
App::import('Controller', 'Campus');

class TestCampusController extends CampusController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CampusControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.campus', 'app.selecao', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.nota', 'app.prova', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Campus =& new TestCampusController();
		$this->Campus->constructClasses();
	}

	function endTest() {
		unset($this->Campus);
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
