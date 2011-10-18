<?php
/* Pagamentos Test cases generated on: 2011-10-14 10:31:05 : 1318599065*/
App::import('Controller', 'Pagamentos');

class TestPagamentosController extends PagamentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PagamentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pagamento', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Pagamentos =& new TestPagamentosController();
		$this->Pagamentos->constructClasses();
	}

	function endTest() {
		unset($this->Pagamentos);
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
