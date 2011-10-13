<div class="logs index">
	<h2><?php __('Logs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tabela');?></th>
			<th><?php echo $this->Paginator->sort('campo');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('valor_anterior');?></th>
			<th><?php echo $this->Paginator->sort('valor_atual');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($logs as $log):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $log['Log']['id']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['tabela']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['campo']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['data']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['valor_anterior']; ?>&nbsp;</td>
		<td><?php echo $log['Log']['valor_atual']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $log['Log']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $log['Log']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Log', true), array('action' => 'add')); ?></li>
	</ul>
</div>