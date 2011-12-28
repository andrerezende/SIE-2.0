<div class="candidatos view">
<h2><?php  __('Candidato');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cpf'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['cpf']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rg'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['rg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Endereco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['endereco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Expedicao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['data_expedicao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Nascimento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['data_nascimento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bairro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['bairro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unidade Federativa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['UnidadeFederativa']['descricao'], array('controller' => 'unidade_federativas', 'action' => 'view', $candidato['UnidadeFederativa']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Municipio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['Municipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $candidato['Municipio']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['Pais']['nome'], array('controller' => 'paises', 'action' => 'view', $candidato['Pais']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Naturalidade Municipio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['NaturalidadeMunicipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $candidato['NaturalidadeMunicipio']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Orgao Expedidor Unidade Federativa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['OrgaoExpedidorUnidadeFederativa']['descricao'], array('controller' => 'unidade_federativas', 'action' => 'view', $candidato['OrgaoExpedidorUnidadeFederativa']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sexo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['Sexo']['id'], array('controller' => 'sexos', 'action' => 'view', $candidato['Sexo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Orgao Expedidor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['orgao_expedidor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nacionalidade Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['NacionalidadePais']['nome'], array('controller' => 'paises', 'action' => 'view', $candidato['NacionalidadePais']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cep'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['cep']; ?>
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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Necessidade Especial'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['NecessidadeEspecial']['descricao'], array('controller' => 'necessidade_especiais', 'action' => 'view', $candidato['NecessidadeEspecial']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado Civil'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($candidato['EstadoCivil']['id'], array('controller' => 'estado_civis', 'action' => 'view', $candidato['EstadoCivil']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $candidato['Candidato']['id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidato', true), array('action' => 'edit', $candidato['Candidato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Candidato', true), array('action' => 'delete', $candidato['Candidato']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidato['Candidato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Federativas', true), array('controller' => 'unidade_federativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Federativa', true), array('controller' => 'unidade_federativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sexos', true), array('controller' => 'sexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sexo', true), array('controller' => 'sexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Necessidade Especiais', true), array('controller' => 'necessidade_especiais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Necessidade Especial', true), array('controller' => 'necessidade_especiais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Civis', true), array('controller' => 'estado_civis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Civil', true), array('controller' => 'estado_civis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Inscricoes');?></h3>
	<?php if (!empty($candidato['Inscricao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidato Id'); ?></th>
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
			<td><?php echo $inscricao['id'];?></td>
			<td><?php echo $inscricao['candidato_id'];?></td>
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
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
