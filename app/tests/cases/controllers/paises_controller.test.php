<?php
/* Paises Test cases generated on: 2011-10-13 11:28:05 : 1318516085*/
App::import('Controller', 'Paises');

class TestPaisesController extends PaisesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaisesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pais', 'app.unidade_federativa', 'app.municipio', 'app.candidato', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Paises =& new TestPaisesController();
		$this->Paises->constructClasses();
	}

	function endTest() {
		unset($this->Paises);
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
