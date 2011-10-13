<div class="selecoes index">
	<h2><?php __('Selecoes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('campus_id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('processo_seletivo_id');?></th>
			<th><?php echo $this->Paginator->sort('ativo_web');?></th>
			<th><?php echo $this->Paginator->sort('vagas');?></th>
			<th><?php echo $this->Paginator->sort('encerrado');?></th>
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
		<td><?php echo $selecao['Selecao']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($selecao['Campus']['nome'], array('controller' => 'campus', 'action' => 'view', $selecao['Campus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($selecao['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $selecao['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($selecao['ProcessoSeletivo']['id'], array('controller' => 'processo_seletivos', 'action' => 'view', $selecao['ProcessoSeletivo']['id'])); ?>
		</td>
		<td><?php echo $selecao['Selecao']['ativo_web']; ?>&nbsp;</td>
		<td><?php echo $selecao['Selecao']['vagas']; ?>&nbsp;</td>
		<td><?php echo $selecao['Selecao']['encerrado']; ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Selecao', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Campus', true), array('controller' => 'campus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus', true), array('controller' => 'campus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('controller' => 'processo_seletivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('controller' => 'cotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cota', true), array('controller' => 'cotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Local Provas', true), array('controller' => 'local_provas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Local Prova', true), array('controller' => 'local_provas', 'action' => 'add')); ?> </li>
	</ul>
</div>