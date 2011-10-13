<div class="unidadeFederativas view">
<h2><?php  __('Unidade Federativa');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidadeFederativa['UnidadeFederativa']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidadeFederativa['UnidadeFederativa']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sigla'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidadeFederativa['UnidadeFederativa']['sigla']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($unidadeFederativa['Pais']['nome'], array('controller' => 'paises', 'action' => 'view', $unidadeFederativa['Pais']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unidade Federativa', true), array('action' => 'edit', $unidadeFederativa['UnidadeFederativa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Unidade Federativa', true), array('action' => 'delete', $unidadeFederativa['UnidadeFederativa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $unidadeFederativa['UnidadeFederativa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Federativas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Federativa', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Municipios');?></h3>
	<?php if (!empty($unidadeFederativa['Municipio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Unidade Federativa Id'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($unidadeFederativa['Municipio'] as $municipio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $municipio['id'];?></td>
			<td><?php echo $municipio['unidade_federativa_id'];?></td>
			<td><?php echo $municipio['nome'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'municipios', 'action' => 'view', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'municipios', 'action' => 'edit', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'municipios', 'action' => 'delete', $municipio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Candidatos');?></h3>
	<?php if (!empty($unidadeFederativa['Candidato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Cpf'); ?></th>
		<th><?php __('Rg'); ?></th>
		<th><?php __('Endereco'); ?></th>
		<th><?php __('Data Expedicao'); ?></th>
		<th><?php __('Data Nascimento'); ?></th>
		<th><?php __('Bairro'); ?></th>
		<th><?php __('Unidade Federativa Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Naturalidade Municipio Id'); ?></th>
		<th><?php __('Orgao Expedidor Unidade Federativa Id'); ?></th>
		<th><?php __('Sexo Id'); ?></th>
		<th><?php __('Orgao Expedidor'); ?></th>
		<th><?php __('Nacionalidade Pais Id'); ?></th>
		<th><?php __('Cep'); ?></th>
		<th><?php __('Telefone'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Necessidade Especial Id'); ?></th>
		<th><?php __('Estado Civil Id'); ?></th>
		<th><?php __('Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($unidadeFederativa['Candidato'] as $candidato):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $candidato['nome'];?></td>
			<td><?php echo $candidato['cpf'];?></td>
			<td><?php echo $candidato['rg'];?></td>
			<td><?php echo $candidato['endereco'];?></td>
			<td><?php echo $candidato['data_expedicao'];?></td>
			<td><?php echo $candidato['data_nascimento'];?></td>
			<td><?php echo $candidato['bairro'];?></td>
			<td><?php echo $candidato['unidade_federativa_id'];?></td>
			<td><?php echo $candidato['municipio_id'];?></td>
			<td><?php echo $candidato['pais_id'];?></td>
			<td><?php echo $candidato['naturalidade_municipio_id'];?></td>
			<td><?php echo $candidato['orgao_expedidor_unidade_federativa_id'];?></td>
			<td><?php echo $candidato['sexo_id'];?></td>
			<td><?php echo $candidato['orgao_expedidor'];?></td>
			<td><?php echo $candidato['nacionalidade_pais_id'];?></td>
			<td><?php echo $candidato['cep'];?></td>
			<td><?php echo $candidato['telefone'];?></td>
			<td><?php echo $candidato['celular'];?></td>
			<td><?php echo $candidato['email'];?></td>
			<td><?php echo $candidato['necessidade_especial_id'];?></td>
			<td><?php echo $candidato['estado_civil_id'];?></td>
			<td><?php echo $candidato['id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'candidatos', 'action' => 'view', $candidato['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'candidatos', 'action' => 'edit', $candidato['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'candidatos', 'action' => 'delete', $candidato['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidato', true), array('controller' => 'candidatos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
