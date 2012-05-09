<div class="span9">
	<div class="page-header">
		<h2>Processo Seletivo: <?php echo $processoSeletivo['ProcessoSeletivo']['descricao']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $processoSeletivo['ProcessoSeletivo']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $processoSeletivo['ProcessoSeletivo']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>Descrição</dt>
		<dd><?php echo $processoSeletivo['ProcessoSeletivo']['descricao']; ?>&nbsp;</dd>
		<dt>Edital</dt>
		<dd><?php echo $this->Html->link($processoSeletivo['Edital']['descricao'], array('controller' => 'editais', 'action' => 'view', $processoSeletivo['Edital']['id'])); ?>&nbsp;</dd>
		<dt>Início das Inscrições</dt>
		<dd><?php echo $this->Formatacao->dataHora($processoSeletivo['ProcessoSeletivo']['data_inicio_inscricoes']); ?>&nbsp;</dd>
		<dt>Fim das Inscrições</dt>
		<dd><?php echo $this->Formatacao->dataHora($processoSeletivo['ProcessoSeletivo']['data_fim_inscricoes']); ?>&nbsp;</dd>
		<dt>Ativo</dt>
		<dd><?php echo $this->Util->boolean($processoSeletivo['ProcessoSeletivo']['ativo_web']); ?>&nbsp;</dd>
	</dl>

	<div>
		<h3>Selecões</h3>
		<?php if (!empty($processoSeletivo['Selecao'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Campus Id</th>
						<th>Curso Id</th>
						<th>Processo Seletivo Id</th>
						<th>Ativo Web</th>
						<th>Vagas</th>
						<th>Encerrado</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($processoSeletivo['Selecao'] as $selecao):?>
						<tr>
							<td><?php echo $selecao['id'];?></td>
							<td><?php echo $selecao['campus_id'];?></td>
							<td><?php echo $selecao['curso_id'];?></td>
							<td><?php echo $selecao['processo_seletivo_id'];?></td>
							<td><?php echo $selecao['ativo_web'];?></td>
							<td><?php echo $selecao['vagas'];?></td>
							<td><?php echo $selecao['encerrado'];?></td>
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