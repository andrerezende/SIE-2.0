<div class="editais index">
	<h4><?php echo $this->Html->link(__('Adicionar Edital', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Editais');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('numero');?></th>
		<th><?php echo $this->Paginator->sort('data');?></th>
		<th><?php echo $this->Paginator->sort('descricao');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($editais as $edital):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $edital['Edital']['id']; ?>&nbsp;</td>
		<td><?php echo $edital['Edital']['numero']; ?>&nbsp;</td>
		<td><?php echo $edital['Edital']['data']; ?>&nbsp;</td>
		<td><?php echo $edital['Edital']['descricao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $edital['Edital']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $edital['Edital']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $edital['Edital']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $edital['Edital']['id'])); ?>
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