<div class="span9">
	<div class="page-header">
		<h2>Edital: <?php echo $edital['Edital']['numero']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $edital['Edital']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $edital['Edital']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>Data</dt>
		<dd><?php echo $edital['Edital']['data']; ?>&nbsp;</dd>
		<dt>Descrição</dt>
		<dd><?php echo $edital['Edital']['descricao']; ?>&nbsp;</dd>
	</dl>
	<div>
		<h3>Processos Seletivos</h3>
		<?php if (!empty($edital['ProcessoSeletivo'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Edital</th>
						<th>Inicio das Inscrições</th>
						<th>Fim das Inscrições</th>
						<th>Ativo</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($edital['ProcessoSeletivo'] as $processoSeletivo):?>
						<tr>
							<td><?php echo $processoSeletivo['id'];?></td>
							<td><?php echo $processoSeletivo['edital_id'];?></td>
							<td><?php echo $this->Formatacao->dataHora($processoSeletivo['data_inicio_inscricoes']);?></td>
							<td><?php echo $this->Formatacao->dataHora($processoSeletivo['data_fim_inscricoes']);?></td>
							<td><?php echo $this->Util->boolean($processoSeletivo['ativo_web']);?></td>
							<td>
								<?php echo $this->Html->link('Visualizar', array('controller' => 'processo_seletivos', 'action' => 'view', $processoSeletivo['id']), array('class' => 'btn')); ?>
								<?php echo $this->Html->link('Editar', array('controller' => 'processo_seletivos', 'action' => 'edit', $processoSeletivo['id']), array('class' => 'btn')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
</div>