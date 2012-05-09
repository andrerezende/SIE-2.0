<div class="span9">
	<div class="page-header">
		<h2>Necessidade Especial: <?php echo $necessidadeEspecial['NecessidadeEspecial']['descricao']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $necessidadeEspecial['NecessidadeEspecial']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $necessidadeEspecial['NecessidadeEspecial']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<div>
		<h3>Candidatos</h3>
		<?php if (!empty($necessidadeEspecial['Candidato'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th><?php __('Nome'); ?></th>
						<th><?php __('CPF'); ?></th>
						<th><?php __('Email'); ?></th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($necessidadeEspecial['Candidato'] as $candidato):?>
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