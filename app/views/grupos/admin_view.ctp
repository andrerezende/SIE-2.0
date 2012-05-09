<div class="span9">
	<div class="page-header">
		<h2>Grupo: <?php echo $grupo['Grupo']['descricao']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $grupo['Grupo']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $grupo['Grupo']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<div>
		<h3>Usuários</h3>
		<?php if (!empty($grupo['Usuario'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Login</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($grupo['Usuario'] as $usuario):?>
						<tr>
							<td><?php echo $usuario['id'];?></td>
							<td><?php echo $usuario['nome'];?></td>
							<td><?php echo $usuario['login'];?></td>
							<td>
								<?php echo $this->Html->link('Visualizar', array('controller' => 'usuarios', 'action' => 'view', $usuario['id']), array('class' => 'btn')); ?>
								<?php echo $this->Html->link('Editar', array('controller' => 'usuarios', 'action' => 'edit', $usuario['id']), array('class' => 'btn')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>
