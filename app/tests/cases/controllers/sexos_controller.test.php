<?php
/* Sexos Test cases generated on: 2011-10-13 11:28:02 : 1318516082*/
App::import('Controller', 'Sexos');

class TestSexosController extends SexosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SexosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sexo', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.necessidade_especial', 'app.estado_civil', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Sexos =& new TestSexosController();
		$this->Sexos->constructClasses();
	}

	function endTest() {
		unset($this->Sexos);
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
