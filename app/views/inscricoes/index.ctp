<div class="inscricoes index">
	<h4><?php echo $this->Html->link(__('Adicionar Inscrição', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Inscrições');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('candidato_id');?></th>
		<th><?php echo $this->Paginator->sort('selecao_id');?></th>
		<th><?php echo $this->Paginator->sort('data');?></th>
		<th><?php echo $this->Paginator->sort('especial_prova');?></th>
		<th><?php echo $this->Paginator->sort('isento');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($inscricoes as $inscricao):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $inscricao['Inscricao']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscricao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $inscricao['Candidato']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscricao['Selecao']['id'], array('controller' => 'selecoes', 'action' => 'view', $inscricao['Selecao']['id'])); ?>
		</td>
		<td><?php echo $inscricao['Inscricao']['data']; ?>&nbsp;</td>
		<td><?php echo $inscricao['Inscricao']['especial_prova']; ?>&nbsp;</td>
		<td><?php echo $inscricao['Inscricao']['isento']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $inscricao['Inscricao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscricao['Inscricao']['id'])); ?>
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