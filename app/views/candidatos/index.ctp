<div class="candidatos index">
	<h2><?php __('Candidatos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('cpf');?></th>
			<th><?php echo $this->Paginator->sort('rg');?></th>
			<th><?php echo $this->Paginator->sort('endereco');?></th>
			<th><?php echo $this->Paginator->sort('data_expedicao');?></th>
			<th><?php echo $this->Paginator->sort('data_nascimento');?></th>
			<th><?php echo $this->Paginator->sort('bairro');?></th>
			<th><?php echo $this->Paginator->sort('unidade_federativa_id');?></th>
			<th><?php echo $this->Paginator->sort('municipio_id');?></th>
			<th><?php echo $this->Paginator->sort('pais_id');?></th>
			<th><?php echo $this->Paginator->sort('naturalidade_municipio_id');?></th>
			<th><?php echo $this->Paginator->sort('orgao_expedidor_unidade_federativa_id');?></th>
			<th><?php echo $this->Paginator->sort('sexo_id');?></th>
			<th><?php echo $this->Paginator->sort('orgao_expedidor');?></th>
			<th><?php echo $this->Paginator->sort('nacionalidade_pais_id');?></th>
			<th><?php echo $this->Paginator->sort('cep');?></th>
			<th><?php echo $this->Paginator->sort('telefone');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('necessidade_especial_id');?></th>
			<th><?php echo $this->Paginator->sort('estado_civil_id');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($candidatos as $candidato):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $candidato['Candidato']['nome']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['cpf']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['rg']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['endereco']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['data_expedicao']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['data_nascimento']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['bairro']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidato['UnidadeFederativa']['descricao'], array('controller' => 'unidade_federativas', 'action' => 'view', $candidato['UnidadeFederativa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidato['Municipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $candidato['Municipio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidato['Pais']['nome'], array('controller' => 'paises', 'action' => 'view', $candidato['Pais']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidato['NaturalidadeMunicipio']['nome'], array('controller' => 'municipios', 'action' => 'view', $candidato['NaturalidadeMunicipio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidato['OrgaoExpedidorUnidadeFederativa']['descricao'], array('controller' => 'unidade_federativas', 'action' => 'view', $candidato['OrgaoExpedidorUnidadeFederativa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidato['Sexo']['id'], array('controller' => 'sexos', 'action' => 'view', $candidato['Sexo']['id'])); ?>
		</td>
		<td><?php echo $candidato['Candidato']['orgao_expedidor']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidato['NacionalidadePais']['nome'], array('controller' => 'paises', 'action' => 'view', $candidato['NacionalidadePais']['id'])); ?>
		</td>
		<td><?php echo $candidato['Candidato']['cep']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['telefone']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['celular']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidato['NecessidadeEspecial']['descricao'], array('controller' => 'necessidade_especiais', 'action' => 'view', $candidato['NecessidadeEspecial']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidato['EstadoCivil']['id'], array('controller' => 'estado_civis', 'action' => 'view', $candidato['EstadoCivil']['id'])); ?>
		</td>
		<td><?php echo $candidato['Candidato']['id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $candidato['Candidato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $candidato['Candidato']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $candidato['Candidato']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $candidato['Candidato']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('action' => 'add')); ?></li>
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