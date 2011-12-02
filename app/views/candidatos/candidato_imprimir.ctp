<div class="candidatos view">
<h2><?php  __('Ficha do Candidato');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CPF'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['cpf']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('RG'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['rg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Orgão Expedidor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['orgao_expedidor'] . ' - ' . $candidato['OrgaoExpedidorUnidadeFederativa']['descricao'];?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data de Expedição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Formatacao->data($candidato['Candidato']['data_expedicao']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nacionalidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['NacionalidadePais']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Naturalidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['NaturalidadeMunicipio']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data de Nascimento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Formatacao->data($candidato['Candidato']['data_nascimento']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sexo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Sexo']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Endereço'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['endereco'] . ', ' . $candidato['Candidato']['bairro'] . ', ' . $candidato['Municipio']['nome']; ?>
			<br />
			<?php echo $candidato['Candidato']['cep']; ?>
			<br />
			<?php echo $candidato['UnidadeFederativa']['descricao'] . ' - ' . $candidato['Pais']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado Civil'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['EstadoCivil']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['telefone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Celular'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['celular']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Necessidades Especiais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['NecessidadeEspecial']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
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
	<h3><?php __('Candidato Sem Inscrições');?></h3>
<?php endif; ?>
</div>