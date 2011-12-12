<div class="processoSeletivos index">
	<h4><?php echo $this->Html->link(__('Adicionar Processo Seletivo', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Processos Seletivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('edital_id');?></th>
		<th><?php echo $this->Paginator->sort('data_inicio_inscricoes');?></th>
		<th><?php echo $this->Paginator->sort('data_fim_inscricoes');?></th>
		<th><?php echo $this->Paginator->sort('ativo_web');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($processoSeletivos as $processoSeletivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $processoSeletivo['ProcessoSeletivo']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($processoSeletivo['Edital']['id'], array('controller' => 'editais', 'action' => 'view', $processoSeletivo['Edital']['id'])); ?>
		</td>
		<td><?php echo $processoSeletivo['ProcessoSeletivo']['data_inicio_inscricoes']; ?>&nbsp;</td>
		<td><?php echo $processoSeletivo['ProcessoSeletivo']['data_fim_inscricoes']; ?>&nbsp;</td>
		<td><?php echo $processoSeletivo['ProcessoSeletivo']['ativo_web']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $processoSeletivo['ProcessoSeletivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $processoSeletivo['ProcessoSeletivo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $processoSeletivo['ProcessoSeletivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $processoSeletivo['ProcessoSeletivo']['id'])); ?>
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