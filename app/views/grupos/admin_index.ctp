<div class="span9">
	<div class="page-header">
		<h2>Grupos</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Grupo', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('Descrição', 'descricao');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($grupos as $grupo):?>
				<tr>
					<td><?php echo $grupo['Grupo']['id']; ?>&nbsp;</td>
					<td><?php echo $grupo['Grupo']['descricao']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $grupo['Grupo']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $grupo['Grupo']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $grupo['Grupo']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
