<div class="span9">
	<div class="page-header">
		<h2>Cursos</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Curso', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('Descrição', 'descricao');?></th>
				<th><?php echo $this->MyPaginator->sort('sigla');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cursos as $curso): ?>
				<tr>
					<td><?php echo $curso['Curso']['id']; ?>&nbsp;</td>
					<td><?php echo $curso['Curso']['descricao']; ?>&nbsp;</td>
					<td><?php echo $curso['Curso']['sigla']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $curso['Curso']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $curso['Curso']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $curso['Curso']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
