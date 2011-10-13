<?php
/* Municipios Test cases generated on: 2011-10-13 11:27:59 : 1318516079*/
App::import('Controller', 'Municipios');

class TestMunicipiosController extends MunicipiosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MunicipiosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.municipio', 'app.unidade_federativa', 'app.pais', 'app.candidato', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.inscricao', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Municipios =& new TestMunicipiosController();
		$this->Municipios->constructClasses();
	}

	function endTest() {
		unset($this->Municipios);
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
