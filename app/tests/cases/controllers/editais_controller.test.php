<?php
/* Editais Test cases generated on: 2011-10-13 11:27:55 : 1318516075*/
App::import('Controller', 'Editais');

class TestEditaisController extends EditaisController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EditaisControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.edital', 'app.processo_seletivo', 'app.selecao', 'app.campus', 'app.curso', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.nota', 'app.prova', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Editais =& new TestEditaisController();
		$this->Editais->constructClasses();
	}

	function endTest() {
		unset($this->Editais);
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
