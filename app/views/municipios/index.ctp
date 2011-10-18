<div class="municipios index">
	<h4><?php echo $this->Html->link(__('Adicionar Município', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Municípios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('unidade_federativa_id');?></th>
		<th><?php echo $this->Paginator->sort('nome');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($municipios as $municipio):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $municipio['Municipio']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($municipio['UnidadeFederativa']['descricao'], array('controller' => 'unidade_federativas', 'action' => 'view', $municipio['UnidadeFederativa']['id'])); ?>
		</td>
		<td><?php echo $municipio['Municipio']['nome']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $municipio['Municipio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $municipio['Municipio']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $municipio['Municipio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipio['Municipio']['id'])); ?>
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