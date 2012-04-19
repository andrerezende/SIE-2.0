<div class="span9">
	<div class="page-header">
		<h2>Inscrição: <?php echo $inscricao['Inscricao']['numero_inscricao']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $inscricao['Inscricao']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $inscricao['Inscricao']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>Candidato</dt>
		<dd><?php echo $this->Html->link($inscricao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $inscricao['Candidato']['id'])); ?>&nbsp;</dd>
		<dt>Selecao</dt>
		<dd><?php echo $this->Html->link($inscricao['Selecao']['id'], array('controller' => 'selecoes', 'action' => 'view', $inscricao['Selecao']['id'])); ?>&nbsp;</dd>
		<dt>Data</dt>
		<dd><?php echo $this->Formatacao->data($inscricao['Inscricao']['data']); ?>&nbsp;</dd>
		<dt>Especial Prova</dt>
		<dd><?php echo $inscricao['Inscricao']['especial_prova']; ?>&nbsp;</dd>
		<dt>Isento</dt>
		<dd><?php echo $this->Util->boolean($inscricao['Inscricao']['isento']); ?>&nbsp;</dd>
	</dl>

	<div>
		<h3>Notas</h3>
		<?php if (!empty($inscricao['Nota'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Valor</th>
						<th>Prova</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($inscricao['Nota'] as $nota):?>
						<tr>
							<td><?php echo $nota['valor'];?></td>
							<td><?php echo $nota['prova_id'];?></td>
							<td>
								<?php echo $this->Html->link('Visualizar', array('controller' => 'notas', 'action' => 'view', $nota['id']), array('class' => 'btn')); ?>
								<?php echo $this->Html->link('Editar', array('controller' => 'notas', 'action' => 'edit', $nota['id']), array('class' => 'btn')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
	<div>
		<h3>Classificação</h3>
		<?php if (!empty($inscricao['Classificacao'])):?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Ordem</th>
						<th>Cota</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($inscricao['Classificacao'] as $classificacao):?>
						<tr>
							<td><?php echo $classificacao['ordem'];?></td>
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
