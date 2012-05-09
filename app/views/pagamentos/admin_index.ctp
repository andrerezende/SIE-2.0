<div class="span9">
	<div class="page-header">
		<h2>Pagamentos</h2>
		<?php echo $this->Html->link('<i class="icon-upload icon-white"></i> Importar Pagamentos', array('action' => 'conciliacao'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('Inscrição', 'inscricao_id');?></th>
				<th><?php echo $this->MyPaginator->sort('Arquivo de Retorno', 'arqretorno');?></th>
				<th><?php echo $this->MyPaginator->sort('Pagamento', 'data_pagamento');?></th>
				<th><?php echo $this->MyPaginator->sort('Retorno', 'data_retorno');?></th>
				<th><?php echo $this->MyPaginator->sort('Importação', 'data_importacao');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pagamentos as $pagamento):?>
				<tr>
					<td><?php echo $pagamento['Pagamento']['id']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($pagamento['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $pagamento['Inscricao']['id'])); ?>
					</td>
					<td><?php echo $pagamento['Pagamento']['arqretorno']; ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->data($pagamento['Pagamento']['data_pagamento']); ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->data($pagamento['Pagamento']['data_retorno']); ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->data($pagamento['Pagamento']['data_importacao']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $pagamento['Pagamento']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $pagamento['Pagamento']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>