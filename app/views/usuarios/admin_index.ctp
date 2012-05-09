<div class="span9">
	<div class="page-header">
		<h2>Usuários</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Usuário', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('nome');?></th>
				<th><?php echo $this->MyPaginator->sort('login');?></th>
				<th><?php echo $this->MyPaginator->sort('grupo_id');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($usuarios as $usuario):?>
				<tr>
					<td><?php echo $usuario['Usuario']['nome']; ?>&nbsp;</td>
					<td><?php echo $usuario['Usuario']['login']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($usuario['Grupo']['descricao'], array('controller' => 'grupos', 'action' => 'view', $usuario['Grupo']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $usuario['Usuario']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $usuario['Usuario']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
