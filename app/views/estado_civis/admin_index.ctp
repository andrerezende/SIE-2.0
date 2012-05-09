<div class="span9">
	<div class="page-header">
		<h2>Estados Civis</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Estado Civil', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
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
			<?php foreach ($estadoCivis as $estadoCivil):?>
				<tr>
					<td><?php echo $estadoCivil['EstadoCivil']['id']; ?>&nbsp;</td>
					<td><?php echo $estadoCivil['EstadoCivil']['descricao']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $estadoCivil['EstadoCivil']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $estadoCivil['EstadoCivil']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $estadoCivil['EstadoCivil']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
