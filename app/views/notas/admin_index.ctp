<div class="notas index">
	<?php echo $this->Html->link(__('Adicionar Nota', true), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
	<h2><?php __('Notas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('valor');?></th>
		<th><?php echo $this->Paginator->sort('prova_id');?></th>
		<th><?php echo $this->Paginator->sort('inscricao_id');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($notas as $nota):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $nota['Nota']['id']; ?>&nbsp;</td>
		<td><?php echo $nota['Nota']['valor']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nota['Prova']['id'], array('controller' => 'provas', 'action' => 'view', $nota['Prova']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nota['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $nota['Inscricao']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $nota['Nota']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $nota['Nota']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $nota['Nota']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nota['Nota']['id'])); ?>
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
