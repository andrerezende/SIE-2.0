<div class="span9">
	<div class="page-header">
		<h2>Critérios de Desempate</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar critério de desempate', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

		<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('tipo');?></th>
				<th><?php echo $this->MyPaginator->sort('campo');?></th>
				<th><?php echo $this->MyPaginator->sort('processo_seletivo_id');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$criterios = Configure::read('CriteriosDesempate');
			foreach ($criterioDesempates as $criterioDesempate):
			?>
			<tr>
				<td><?php echo $criterioDesempate['CriterioDesempate']['id']; ?>&nbsp;</td>
				<td><?php echo $criterios[$criterioDesempate['CriterioDesempate']['tipo']]; ?>&nbsp;</td>
				<td><?php echo $criterioDesempate['CriterioDesempate']['campo']; ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($criterioDesempate['ProcessoSeletivo']['descricao'], array('controller' => 'processo_seletivos', 'action' => 'view', $criterioDesempate['ProcessoSeletivo']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link(__('View', true), array('action' => 'view', $criterioDesempate['CriterioDesempate']['id']), array('class' => 'btn')); ?>
					<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $criterioDesempate['CriterioDesempate']['id']), array('class' => 'btn')); ?>
					<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $criterioDesempate['CriterioDesempate']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
