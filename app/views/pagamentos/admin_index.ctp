<div class="pagamentos index">
	<h4><?php echo $this->Html->link(__('Adicionar Pagamento', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Pagamentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('inscricao_id');?></th>
		<th><?php echo $this->Paginator->sort('arqretorno');?></th>
		<th><?php echo $this->Paginator->sort('data_pagamento');?></th>
		<th><?php echo $this->Paginator->sort('data_retorno');?></th>
		<th><?php echo $this->Paginator->sort('data_importacao');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pagamentos as $pagamento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pagamento['Pagamento']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pagamento['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $pagamento['Inscricao']['id'])); ?>
		</td>
		<td><?php echo $pagamento['Pagamento']['arqretorno']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_pagamento']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_retorno']; ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_importacao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pagamento['Pagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['Pagamento']['id'])); ?>
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