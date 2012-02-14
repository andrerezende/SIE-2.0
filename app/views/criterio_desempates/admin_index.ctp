<div class="criterioDesempates index">
	<h4><?php echo $this->Html->link(__('Adicionar Critério de Desempate', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Critérios de Desempate');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('tipo');?></th>
		<th><?php echo $this->Paginator->sort('campo');?></th>
		<th><?php echo $this->Paginator->sort('processo_seletivo_id');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	$criterios = Configure::read('CriteriosDesempate');
	foreach ($criterioDesempates as $criterioDesempate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $criterioDesempate['CriterioDesempate']['id']; ?>&nbsp;</td>
		<td><?php echo $criterios[$criterioDesempate['CriterioDesempate']['tipo']]; ?>&nbsp;</td>
		<td><?php echo $criterioDesempate['CriterioDesempate']['campo']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($criterioDesempate['ProcessoSeletivo']['descricao'], array('controller' => 'processo_seletivos', 'action' => 'view', $criterioDesempate['ProcessoSeletivo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $criterioDesempate['CriterioDesempate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $criterioDesempate['CriterioDesempate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $criterioDesempate['CriterioDesempate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $criterioDesempate['CriterioDesempate']['id'])); ?>
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