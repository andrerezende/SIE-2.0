<div class="classificacoes index">
	<h2><?php __('Classificacoes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('ordem');?></th>
			<th><?php echo $this->Paginator->sort('inscricao_id');?></th>
			<th><?php echo $this->Paginator->sort('cota_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($classificacoes as $classificacao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $classificacao['Classificacao']['id']; ?>&nbsp;</td>
		<td><?php echo $classificacao['Classificacao']['ordem']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($classificacao['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $classificacao['Inscricao']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($classificacao['Cota']['id'], array('controller' => 'cotas', 'action' => 'view', $classificacao['Cota']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $classificacao['Classificacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $classificacao['Classificacao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $classificacao['Classificacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classificacao['Classificacao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('controller' => 'cotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cota', true), array('controller' => 'cotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listas', true), array('controller' => 'listas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lista', true), array('controller' => 'listas', 'action' => 'add')); ?> </li>
	</ul>
</div>