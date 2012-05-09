<table>
	<tr>
		<th>Código do Inscrito</th>
		<th>Data de Pagamento</th>
		<th>Data do Arquivo de Retorno</th>
	</tr>
<?php
$size = sizeof($fileLines);
$pos = 1;
$count = 0;
for ($i = 2; $i < $size - 2; $i++) :
	if ($pos == 1) :
		$count++;
		echo '<tr>';
		$inscritoId = '';
		for ($j= 47; $j < 54; $j++) {
			$inscritoId .= $fileLines[$i]{$j};
		}
		$pos++;
		echo '<td>' . $inscritoId . '</td>';
	elseif ($pos == 2) :
		$dataPagamento = '';
		for ($k = 137; $k  < 145; $k++) {
			$dataPagamento .= $fileLines[$i]{$k};
		}
		$dataArquivo = '';
		for ($l = 145 ; $l < 154; $l++) {
			$dataArquivo .= $fileLines[$i]{$l};
		}
		echo '<td>' . substr($dataPagamento, 0, 2) . '/' .substr($dataPagamento, 2, 2) . '/' .substr($dataPagamento, 4, 4)  . '</td>';
		echo '<td>' . substr($dataArquivo, 0, 2) . '/' .substr($dataArquivo, 2, 2) . '/' .substr($dataArquivo, 4, 4) . '</td>';
		echo '</tr>';
		$pos = 1;
	endif;
endfor;
?>
	<tr>
		<th>Total de Registros</th>
		<th colspan="2"><?php echo $count;?></th>
	</tr>
</table>

<?php echo $this->Form->create(null, array('url' => '/admin/pagamentos/conciliacao_importar'));?>
<?php echo $this->Form->input('path', array('value' => $path, 'type' => 'hidden'));?>
<?php echo $this->Form->input('fileName', array('value' => $fileName, 'type' => 'hidden'));?>
<?php echo $this->Form->end('Importar');?>