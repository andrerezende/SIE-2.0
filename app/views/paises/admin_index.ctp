<div class="paises index">
	<?php echo $this->Html->link(__('Adicionar País', true), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
	<h2><?php __('Paises');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('nome');?></th>
		<th><?php echo $this->Paginator->sort('nacionalidade');?></th>
		<th><?php echo $this->Paginator->sort('sigla');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paises as $pais):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pais['Pais']['id']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['nome']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['nacionalidade']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['sigla']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pais['Pais']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pais['Pais']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pais['Pais']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pais['Pais']['id'])); ?>
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
