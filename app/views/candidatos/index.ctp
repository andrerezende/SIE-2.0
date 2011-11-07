<div class="candidatos index">
	<h4><?php echo $this->Html->link(__('Adicionar Candidato', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Candidatos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('nome');?></th>
		<th><?php echo $this->Paginator->sort('cpf');?></th>
		<th><?php echo $this->Paginator->sort('rg');?></th>
		<th><?php echo $this->Paginator->sort('data_nascimento');?></th>
		<th><?php echo $this->Paginator->sort('sexo_id');?></th>
		<th><?php echo $this->Paginator->sort('telefone');?></th>
		<th><?php echo $this->Paginator->sort('celular');?></th>
		<th><?php echo $this->Paginator->sort('email');?></th>
		<th><?php echo $this->Paginator->sort('necessidade_especial_id');?></th>
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
		<td><?php echo $candidato['Candidato']['id']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['nome']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['cpf']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['rg']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['data_nascimento']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidato['Sexo']['descricao'], array('controller' => 'sexos', 'action' => 'view', $candidato['Sexo']['id'])); ?>
		</td>
		<td><?php echo $candidato['Candidato']['telefone']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['celular']; ?>&nbsp;</td>
		<td><?php echo $candidato['Candidato']['email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidato['NecessidadeEspecial']['descricao'], array('controller' => 'necessidade_especiais', 'action' => 'view', $candidato['NecessidadeEspecial']['id'])); ?>
		</td>
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

<?php if ($this->Paginator->numbers()):?>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
		<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
<?php endif;?>
</div>