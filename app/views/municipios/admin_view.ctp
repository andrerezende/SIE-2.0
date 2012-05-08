<div class="span9">
	<div class="page-header">
		<h2>Município: <?php echo $municipio['Municipio']['nome']; ?> / <?php echo $this->Html->link($municipio['UnidadeFederativa']['sigla'], array('controller' => 'unidade_federativas', 'action' => 'view', $municipio['UnidadeFederativa']['id'])); ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $municipio['Municipio']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $municipio['Municipio']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<div>
		<h3>Candidatos</h3>
		<?php if (!empty($municipio['Candidato'])):?>
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
					<?php foreach ($municipio['Candidato'] as $candidato):?>
						<tr>
							<td><?php echo $candidato['nome'];?></td>
							<td><?php echo $candidato['cpf'];?></td>
							<td><?php echo $candidato['email'];?></td>
							<td>
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