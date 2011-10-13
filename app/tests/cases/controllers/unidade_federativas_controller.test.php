<?php
/* UnidadeFederativas Test cases generated on: 2011-10-13 11:27:59 : 1318516079*/
App::import('Controller', 'UnidadeFederativas');

class TestUnidadeFederativasController extends UnidadeFederativasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UnidadeFederativasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.unidade_federativa', 'app.pais', 'app.candidato', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->UnidadeFederativas =& new TestUnidadeFederativasController();
		$this->UnidadeFederativas->constructClasses();
	}

	function endTest() {
		unset($this->UnidadeFederativas);
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
