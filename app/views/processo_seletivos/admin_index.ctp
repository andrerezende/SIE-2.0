<div class="span9">
	<div class="page-header">
		<h2>Processos Seletivos</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Processo Seletivo', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('Descrição', 'descricao');?></th>
				<th><?php echo $this->MyPaginator->sort('edital_id');?></th>
				<th><?php echo $this->MyPaginator->sort('Início das Inscrições', 'data_inicio_inscricoes');?></th>
				<th><?php echo $this->MyPaginator->sort('Fim das Inscrições', 'data_fim_inscricoes');?></th>
				<th><?php echo $this->MyPaginator->sort('Ativo', 'ativo_web');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($processoSeletivos as $processoSeletivo):?>
				<tr>
					<td><?php echo $processoSeletivo['ProcessoSeletivo']['id']; ?>&nbsp;</td>
					<td><?php echo $processoSeletivo['ProcessoSeletivo']['descricao']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($processoSeletivo['Edital']['descricao'], array('controller' => 'editais', 'action' => 'view', $processoSeletivo['Edital']['id'])); ?>
					</td>
					<td><?php echo $this->Formatacao->dataHora($processoSeletivo['ProcessoSeletivo']['data_inicio_inscricoes']); ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->dataHora($processoSeletivo['ProcessoSeletivo']['data_fim_inscricoes']); ?>&nbsp;</td>
					<td><?php echo $this->Util->boolean($processoSeletivo['ProcessoSeletivo']['ativo_web']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $processoSeletivo['ProcessoSeletivo']['id']), array('class' => 'btn')); ?>
						<br />
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $processoSeletivo['ProcessoSeletivo']['id']), array('class' => 'btn')); ?>
						<br />
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $processoSeletivo['ProcessoSeletivo']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $this->element('pagination');?>
</div>
