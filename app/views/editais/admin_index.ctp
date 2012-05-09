<div class="span9">
	<div class="page-header">
		<h2>Editais</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Edital', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('numero');?></th>
				<th><?php echo $this->MyPaginator->sort('data');?></th>
				<th><?php echo $this->MyPaginator->sort('Descrição', 'descricao');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($editais as $edital):?>
				<tr>
					<td><?php echo $edital['Edital']['id']; ?>&nbsp;</td>
					<td><?php echo $edital['Edital']['numero']; ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->data($edital['Edital']['data']); ?>&nbsp;</td>
					<td><?php echo $edital['Edital']['descricao']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $edital['Edital']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $edital['Edital']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $edital['Edital']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
