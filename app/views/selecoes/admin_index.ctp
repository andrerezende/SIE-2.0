<div class="selecoes index">
	<h4><?php echo $this->Html->link(__('Adicionar Seleção', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Seleções');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('campus_id');?></th>
		<th><?php echo $this->Paginator->sort('curso_id');?></th>
		<th><?php echo $this->Paginator->sort('processo_seletivo_id');?></th>
		<th><?php echo $this->Paginator->sort('ativo_web');?></th>
		<th><?php echo $this->Paginator->sort('vagas');?></th>
		<th><?php echo $this->Paginator->sort('encerrado');?></th>
		<th><?php echo $this->Paginator->sort('valor_inscricao');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($selecoes as $selecao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($selecao['Campus']['nome'], array('controller' => 'campus', 'action' => 'view', $selecao['Campus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($selecao['Curso']['descricao'], array('controller' => 'cursos', 'action' => 'view', $selecao['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($selecao['ProcessoSeletivo']['id'], array('controller' => 'processo_seletivos', 'action' => 'view', $selecao['ProcessoSeletivo']['id'])); ?>
		</td>
		<td><?php echo $selecao['Selecao']['ativo_web']; ?>&nbsp;</td>
		<td><?php echo $selecao['Selecao']['vagas']; ?>&nbsp;</td>
		<td><?php echo $selecao['Selecao']['encerrado']; ?>&nbsp;</td>
		<td><?php echo $selecao['Selecao']['valor_inscricao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $selecao['Selecao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $selecao['Selecao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $selecao['Selecao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $selecao['Selecao']['id'])); ?>
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