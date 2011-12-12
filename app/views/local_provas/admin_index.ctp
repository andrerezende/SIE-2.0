<div class="localProvas index">
	<h4><?php echo $this->Html->link(__('Adicionar Local de Prova', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Local de Provas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('descricao');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($localProvas as $localProva):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $localProva['LocalProva']['id']; ?>&nbsp;</td>
		<td><?php echo $localProva['LocalProva']['descricao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $localProva['LocalProva']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $localProva['LocalProva']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $localProva['LocalProva']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $localProva['LocalProva']['id'])); ?>
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