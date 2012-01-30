<div class="inscricoes index">
	<h2><?php __('Inscrições - Relação Geral de Homologados');?></h2>
	<table cellpadding="0" cellspacing="0">
		<?php echo $this->Form->create('Inscricao', array('url' => array_merge(array('action' => 'isentos_homologados'), $this->params['pass']),
			'inputDefaults' => array('div' => false, 'class' => false)
		));?>
		<tr>
			<th><?php echo $this->Form->input('nome');?></th>
			<th><?php echo $this->Form->input('processo_seletivo', array('options' => $processoSeletivos, 'empty' => 'Todos', 'type' => 'select', 'value' => isset($this->params['named']['processo_seletivo']) ? $this->params['named']['processo_seletivo'] : null));?></th>
			<th><?php echo $this->Form->input('limite', array('options' => Configure::read('Query.limit'), 'empty' => 'Ilimitado', 'value' => isset($this->params['named']['limite']) ? $this->params['named']['limite'] : null));?></th>
			<th><?php echo $this->Form->end('Filtrar');?></th>
		</tr>
	</table>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('Campus');?></th>
			<th><?php echo $this->Paginator->sort('Curso');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('Nº Inscrição', 'numero_inscricao');?></th>
			<th><?php echo $this->Paginator->sort('RG', 'rg');?></th>
			<th><?php echo $this->Paginator->sort('Processo Seletivo', 'ProcessoSeletivo');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($inscricoes as $inscricao):
			if (empty($inscricao['Selecao']['id'])) {
				continue;
			}
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inscricao['Selecao']['Campus']['nome']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Selecao']['Curso']['descricao']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Candidato']['nome']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Inscricao']['numero_inscricao']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Candidato']['rg']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Selecao']['ProcessoSeletivo']['descricao']; ?>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php if ($this->Paginator->numbers()):?>
		<div class="paging">
			<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
			<?php echo $this->Paginator->numbers();?>
			<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
		</div>
	<?php endif;?>
</div>