<div class="span9">
	<div class="page-header">
		<h2>Seleções</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar Seleção', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('campus_id');?></th>
				<th><?php echo $this->MyPaginator->sort('curso_id');?></th>
				<th><?php echo $this->MyPaginator->sort('processo_seletivo_id');?></th>
				<th><?php echo $this->MyPaginator->sort('Ativo', 'ativo_web');?></th>
				<th><?php echo $this->MyPaginator->sort('vagas');?></th>
				<th><?php echo $this->MyPaginator->sort('encerrado');?></th>
				<th><?php echo $this->MyPaginator->sort('Valor das Inscrições', 'valor_inscricao');?></th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($selecoes as $selecao):?>
				<tr>
					<td>
						<?php echo $this->Html->link($selecao['Campus']['nome'], array('controller' => 'campus', 'action' => 'view', $selecao['Campus']['id'])); ?>
					</td>
					<td class="span3">
						<?php echo $this->Html->link($selecao['Curso']['descricao'], array('controller' => 'cursos', 'action' => 'view', $selecao['Curso']['id'])); ?>
					</td>
					<td class="span2">
						<?php echo $this->Html->link($selecao['ProcessoSeletivo']['descricao'], array('controller' => 'processo_seletivos', 'action' => 'view', $selecao['ProcessoSeletivo']['id'])); ?>
					</td>
					<td><?php echo $this->Util->boolean($selecao['Selecao']['ativo_web']); ?>&nbsp;</td>
					<td><?php echo $selecao['Selecao']['vagas']; ?>&nbsp;</td>
					<td><?php echo $this->Util->boolean($selecao['Selecao']['encerrado']); ?>&nbsp;</td>
					<td><?php echo $this->Formatacao->moeda($selecao['Selecao']['valor_inscricao']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link('Visualizar', array('action' => 'view', $selecao['Selecao']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Editar', array('action' => 'edit', $selecao['Selecao']['id']), array('class' => 'btn')); ?>
						<?php echo $this->Html->link('Excluir', array('action' => 'delete', $selecao['Selecao']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->element('pagination');?>
</div>