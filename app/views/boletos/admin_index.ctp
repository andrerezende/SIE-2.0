<div class="span9">
	<div class="page-header">
		<h2>Boletos</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Boleto', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('Descrição', 'descricao');?></th>
				<th><?php echo $this->MyPaginator->sort('Agência', 'agencia');?></th>
				<th><?php echo $this->MyPaginator->sort('conta');?></th>
				<th><?php echo $this->MyPaginator->sort('identificacao');?></th>
				<th><?php echo $this->MyPaginator->sort('CNPJ', 'cpf_cnpj');?></th>
				<th><?php echo $this->MyPaginator->sort('Seleção', 'selecao_id');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($boletos as $boleto):?>
				<tr>
					<td><?php echo $boleto['Boleto']['descricao']; ?>&nbsp;</td>
					<td><?php echo $boleto['Boleto']['agencia']; ?>&nbsp;</td>
					<td><?php echo $boleto['Boleto']['conta']; ?>&nbsp;</td>
					<td><?php echo $boleto['Boleto']['identificacao']; ?>&nbsp;</td>
					<td><?php echo $boleto['Boleto']['cpf_cnpj']; ?>&nbsp;</td>
					<td><?php echo $boleto['Boleto']['selecao_id']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $boleto['Boleto']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $boleto['Boleto']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $boleto['Boleto']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>
