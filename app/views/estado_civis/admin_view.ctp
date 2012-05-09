<div class="span9">
	<div class="page-header">
		<h2>Estado Civil: <?php echo $estadoCivil['EstadoCivil']['descricao']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $estadoCivil['EstadoCivil']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $estadoCivil['EstadoCivil']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<div>
		<h3>Candidatos</h3>
		<?php if (!empty($estadoCivil['Candidato'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nome</th>
						<th>CPF</th>
						<th>Email</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($estadoCivil['Candidato'] as $candidato):?>
						<tr>
							<td><?php echo $candidato['nome'];?></td>
							<td><?php echo $candidato['cpf'];?></td>
							<td><?php echo $candidato['email'];?></td>
							<td class="actions">
								<?php echo $this->Html->link('Visualizar', array('controller' => 'candidatos', 'action' => 'view', $candidato['id']), array('class' => 'btn')); ?>
								<?php echo $this->Html->link('Editar', array('controller' => 'candidatos', 'action' => 'edit', $candidato['id']), array('class' => 'btn')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>
