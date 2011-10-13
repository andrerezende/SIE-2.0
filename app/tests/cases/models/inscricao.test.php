<?php
/* Inscricao Test cases generated on: 2011-10-13 11:27:46 : 1318516066*/
App::import('Model', 'Inscricao');

class InscricaoTestCase extends CakeTestCase {
	var $fixtures = array('app.inscricao', 'app.candidato', 'app.unidade_federativa', 'app.pais', 'app.municipio', 'app.sexo', 'app.necessidade_especial', 'app.estado_civil', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.cota', 'app.classificacao', 'app.lista', 'app.classificacoes_lista', 'app.local_prova', 'app.local_provas_selecao', 'app.nota', 'app.prova');

	function startTest() {
		$this->Inscricao =& ClassRegistry::init('Inscricao');
	}

	function endTest() {
		unset($this->Inscricao);
		ClassRegistry::flush();
	}

}
