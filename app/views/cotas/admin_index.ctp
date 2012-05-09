<div class="span9">
	<div class="page-header">
		<h2>Cotas</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Cota', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('Descrição', 'descricao');?></th>
				<th><?php echo $this->MyPaginator->sort('quantidade');?></th>
				<th><?php echo $this->MyPaginator->sort('Seleção', 'selecao_id');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cotas as $cota):?>
				<tr>
					<td><?php echo $cota['Cota']['id']; ?>&nbsp;</td>
					<td><?php echo $cota['Cota']['descricao']; ?>&nbsp;</td>
					<td><?php echo $cota['Cota']['quantidade']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($cota['Selecao']['id'], array('controller' => 'selecoes', 'action' => 'view', $cota['Selecao']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $cota['Cota']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $cota['Cota']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $cota['Cota']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $this->element('pagination');?>
</div>