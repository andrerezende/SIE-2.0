<div class="">
	<h1><?php __('Candidatos');?></h1>
	<table class="data display">
		<thead>
			<tr>
				<th>Campus</th>
				<th>Curso</th>
				<th>Local de Prova</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>RG</th>
				<th>Data de Nascimento</th>
				<th>Sexo</th>
				<th>Telefone</th>
				<th>Celular</th>
				<th>Email</th>
				<th>Necessidade Especial</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			foreach ($candidatos as $candidato):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
				<tr<?php echo $class;?>>
					<td><?php echo $candidato['Inscricao'][0]['Selecao']['Campus']['nome']; ?>&nbsp;</td>
					<td><?php echo $candidato['Inscricao'][0]['Selecao']['Curso']['descricao']; ?>&nbsp;</td>
					<td><?php echo $candidato['Inscricao'][0]['LocalProva']['descricao']; ?>&nbsp;</td>
					<td><?php echo $candidato['Candidato']['nome']; ?>&nbsp;</td>
					<td><?php echo $candidato['Candidato']['cpf']; ?>&nbsp;</td>
					<td><?php echo $candidato['Candidato']['rg']; ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->data($candidato['Candidato']['data_nascimento']); ?>&nbsp;</td>
					<td><?php echo $candidato['Sexo']['descricao'];?></td>
					<td><?php echo $candidato['Candidato']['telefone']; ?>&nbsp;</td>
					<td><?php echo $candidato['Candidato']['celular']; ?>&nbsp;</td>
					<td><?php echo $candidato['Candidato']['email']; ?>&nbsp;</td>
					<td><?php echo $candidato['NecessidadeEspecial']['descricao']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>