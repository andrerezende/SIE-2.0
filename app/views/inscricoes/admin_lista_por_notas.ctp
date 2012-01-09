<?php
//debug($inscricoes);
foreach ($inscricoes as $inscricao) {
	$qtdNotas = count($inscricao['ProcessoSeletivo']['Prova']) + 1;
	echo $inscricao['Campus']['nome'] . '<br />';
	echo $inscricao['Curso']['descricao'] . '<br />';
	echo '<table>';
	echo '<tr>';
		echo '<th rowspan=2>Candidato</th>';
		echo '<th rowspan=2>Número de Inscrição</th>';
		echo '<th rowspan=2>RG</th>';
		echo '<th colspan=' . $qtdNotas . '>Avaliações</th>';
		echo '<th rowspan=2>Classificação no Curso</th>';
	echo '</tr>';
	echo '<tr>';
		foreach($inscricao['ProcessoSeletivo']['Prova'] as $prova) {
			echo '<th>' . $prova['descricao'] . '</th>';
		}
//		echo '<th>AV 2</th>';
		echo '<th>Final</th>';
	echo '</tr>';
	foreach($inscricao['Inscricao'] as $inscrito) {
		echo '<tr>';
			echo '<td>' . $inscrito['Candidato']['nome'] . '</td>';
			echo '<td>' . $inscrito['numero_inscricao'] . '</td>';
			echo '<td>' . $inscrito['Candidato']['rg'] . '</td>';
//			debug($inscrito['Nota']);
			$notaTotal = 0;
			foreach ($inscrito['Nota'] as $nota) {
				$notaTotal += $nota['valor'];
				echo '<td>' . $nota['valor'] . '</td>';
			}
			echo '<td>' . $notaTotal . '</td>';
		echo '</tr>';
	}
	echo '</table>';
}
//exit;