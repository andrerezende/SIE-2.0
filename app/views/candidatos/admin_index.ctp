<div class="span9">
	<div class="page-header">
		<h2>Candidatos</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Candidato', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('nome');?></th>
				<th><?php echo $this->MyPaginator->sort('email');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($candidatos as $candidato):?>
				<tr>
					<td><?php echo $candidato['Candidato']['id']; ?>&nbsp;</td>
					<td  class="span4"><?php echo $candidato['Candidato']['nome']; ?>&nbsp;</td>
					<td><?php echo $candidato['Candidato']['email']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $candidato['Candidato']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $candidato['Candidato']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $candidato['Candidato']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
