<div class="candidatos view">
<h2><?php  __('Ficha do Candidato');?></h2>
	<table>
		<tr>
			<td class="table-label"><?php __('Nome'); ?></td>
			<td><?php echo $candidato['Candidato']['nome']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('CPF'); ?></td>
			<td><?php echo $candidato['Candidato']['cpf']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('RG'); ?></td>
			<td><?php echo $candidato['Candidato']['rg']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Orgão Expedidor'); ?></td>
			<td><?php echo $candidato['Candidato']['orgao_expedidor'] . ' - ' . $candidato['OrgaoExpedidorUnidadeFederativa']['descricao'];?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Data de Expedição'); ?></td>
			<td><?php echo $this->Formatacao->data($candidato['Candidato']['data_expedicao']); ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Nacionalidade'); ?></td>
			<td><?php echo $candidato['NacionalidadePais']['nome']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Data de Nascimento'); ?></td>
			<td><?php echo $this->Formatacao->data($candidato['Candidato']['data_nascimento']); ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Sexo'); ?></td>
			<td><?php echo $candidato['Sexo']['descricao']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Endereço'); ?></td>
			<td>
				<?php echo $candidato['Candidato']['endereco'] . ', ' . $candidato['Candidato']['bairro'] . ', ' . $candidato['Municipio']['nome']; ?>
				<br />
				<?php echo $candidato['Candidato']['cep']; ?>
				<br />
				<?php echo $candidato['UnidadeFederativa']['descricao'] . ' - ' . $candidato['Pais']['nome']; ?>
			</td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Estado Civil'); ?></td>
			<td><?php echo $candidato['EstadoCivil']['descricao']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Telefone'); ?></td>
			<td><?php echo $candidato['Candidato']['telefone']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Celular'); ?></td>
			<td><?php echo $candidato['Candidato']['celular']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Email'); ?></td>
			<td><?php echo $candidato['Candidato']['email']; ?></td>
		</tr>
		<tr>
			<td class="table-label"><?php __('Necessidades Especiais'); ?></td>
			<td><?php echo $candidato['NecessidadeEspecial']['descricao']; ?></td>
		</tr>
	</table>
</div>
<br />
<div class="related">
	<?php if (!empty($candidato['Inscricao'])):?>
	<h3><?php __('Inscrições');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Selecao Id'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Especial Prova'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidato['Inscricao'] as $inscricao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inscricao['selecao_id'];?></td>
			<td><?php echo $inscricao['data'];?></td>
			<td><?php echo $inscricao['especial_prova'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'inscricoes', 'action' => 'view', $inscricao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'inscricoes', 'action' => 'edit', $inscricao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'inscricoes', 'action' => 'delete', $inscricao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscricao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else: ?>
	<h4><?php __('Candidato Sem Inscrições');?></h4>
<?php endif; ?>
</div>