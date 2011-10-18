<?php
/* ProcessoSeletivos Test cases generated on: 2011-10-13 11:28:05 : 1318516085*/
App::import('Controller', 'ProcessoSeletivos');

class TestProcessoSeletivosController extends ProcessoSeletivosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProcessoSeletivosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.processo_seletivo', 'app.edital', 'app.selecao', 'app.campus', 'app.curso', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.nota', 'app.prova', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->ProcessoSeletivos =& new TestProcessoSeletivosController();
		$this->ProcessoSeletivos->constructClasses();
	}

	function endTest() {
		unset($this->ProcessoSeletivos);
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
