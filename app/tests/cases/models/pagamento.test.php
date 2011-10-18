<?php
/* Pagamento Test cases generated on: 2011-10-14 10:30:48 : 1318599048*/
App::import('Model', 'Pagamento');

class PagamentoTestCase extends CakeTestCase {
	var $fixtures = array('app.pagamento', 'app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Pagamento =& ClassRegistry::init('Pagamento');
	}

	function endTest() {
		unset($this->Pagamento);
		ClassRegistry::flush();
	}

}
