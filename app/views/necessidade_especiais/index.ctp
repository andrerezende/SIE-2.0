<div class="necessidadeEspeciais index">
	<h4><?php echo $this->Html->link(__('Adicionar Necessidade Especial', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Necessidades Especiais');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('descricao');?></th>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($necessidadeEspeciais as $necessidadeEspecial):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $necessidadeEspecial['NecessidadeEspecial']['descricao']; ?>&nbsp;</td>
		<td><?php echo $necessidadeEspecial['NecessidadeEspecial']['id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $necessidadeEspecial['NecessidadeEspecial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $necessidadeEspecial['NecessidadeEspecial']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $necessidadeEspecial['NecessidadeEspecial']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $necessidadeEspecial['NecessidadeEspecial']['id'])); ?>
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