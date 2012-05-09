<div class="span9">
	<div class="page-header">
		<h2>Campus: <?php echo $campus['Campus']['nome']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $campus['Campus']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $campus['Campus']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<div>
		<h3>Seleções</h3>
		<?php if (!empty($campus['Selecao'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Campus</th>
						<th>Curso</th>
						<th>Processo Seletivo</th>
						<th>Ativo Web</th>
						<th>Vagas</th>
						<th>Encerrado</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($campus['Selecao'] as $selecao):?>
						<tr>
							<td><?php echo $selecao['id'];?></td>
							<td><?php echo $selecao['campus_id'];?></td>
							<td><?php echo $selecao['curso_id'];?></td>
							<td><?php echo $selecao['processo_seletivo_id'];?></td>
							<td><?php echo $this->Util->boolean($selecao['ativo_web']);?></td>
							<td><?php echo $selecao['vagas'];?></td>
							<td><?php echo $this->Util->boolean($selecao['encerrado']);?></td>
							<td>
								<?php echo $this->Html->link('Visualizar', array('controller' => 'selecoes', 'action' => 'view', $selecao['id']), array('class' => 'btn')); ?>
								<?php echo $this->Html->link('Editar', array('controller' => 'selecoes', 'action' => 'edit', $selecao['id']), array('class' => 'btn')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>
