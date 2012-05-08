<div class="provas index">
	<?php echo $this->Html->link(__('Adicionar Prova', true), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
	<h2><?php __('Provas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('descricao');?></th>
		<th><?php echo $this->Paginator->sort('peso');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($provas as $prova):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $prova['Prova']['id']; ?>&nbsp;</td>
		<td><?php echo $prova['Prova']['descricao']; ?>&nbsp;</td>
		<td><?php echo $prova['Prova']['peso']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $prova['Prova']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $prova['Prova']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $prova['Prova']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $prova['Prova']['id'])); ?>
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
