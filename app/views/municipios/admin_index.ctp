<div class="span9">
	<div class="page-header">
		<h2>Municípios</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Município', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('unidade_federativa_id');?></th>
				<th><?php echo $this->MyPaginator->sort('nome');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($municipios as $municipio):?>
				<tr>
					<td><?php echo $municipio['Municipio']['id']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($municipio['UnidadeFederativa']['descricao'], array('controller' => 'unidade_federativas', 'action' => 'view', $municipio['UnidadeFederativa']['id'])); ?>
					</td>
					<td><?php echo $municipio['Municipio']['nome']; ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $municipio['Municipio']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $municipio['Municipio']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $municipio['Municipio']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
