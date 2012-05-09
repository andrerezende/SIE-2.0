<div class="span9">
	<div class="page-header">
		<h2>Cota: <?php echo $cota['Cota']['descricao']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $cota['Cota']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $cota['Cota']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt><?php __('Quantidade'); ?></dt>
		<dd><?php echo $cota['Cota']['quantidade']; ?>&nbsp;</dd>
		<dt><?php __('Seleção'); ?></dt>
		<dd><?php echo $this->Html->link($cota['Selecao']['id'], array('controller' => 'selecoes', 'action' => 'view', $cota['Selecao']['id'])); ?>&nbsp;</dd>
	</dl>

	<div>
		<h3>Classificações</h3>
		<?php if (!empty($cota['Classificacao'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Ordem</th>
						<th>Inscrição</th>
						<th>Cota</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($cota['Classificacao'] as $classificacao):?>
						<tr>
							<td><?php echo $classificacao['id'];?></td>
							<td><?php echo $classificacao['ordem'];?></td>
							<td><?php echo $classificacao['inscricao_id'];?></td>
							<td><?php echo $classificacao['cota_id'];?></td>
							<td>
								<?php echo $this->Html->link('Visualizar', array('controller' => 'classificacoes', 'action' => 'view', $classificacao['id']), array('class' => 'btn')); ?>
								<?php echo $this->Html->link('Editar', array('controller' => 'classificacoes', 'action' => 'edit', $classificacao['id']), array('class' => 'btn')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>
