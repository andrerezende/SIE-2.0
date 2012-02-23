<div class="inscricoes index">
<?php
if (!empty($inscricoes)) :
$qtdProvas = count($inscricoes[0]['Nota']);
?>
	<h3><?php echo $inscricoes[0]['Selecao']['Campus']['nome'];?></h3>
	<h4><?php echo $inscricoes[0]['Selecao']['Curso']['descricao'];?></h4>
	<table cellpadding="0" cellspacing="0">
		<?php echo $this->Form->create('Inscricao', array('url' => array_merge(array('action' => 'lista_por_notas'), $this->params['pass']),
			'inputDefaults' => array('div' => false, 'class' => false)
		));?>
		<tr>
			<th><?php echo $this->Form->input('nome');?></th>
			<th><?php echo $this->Form->input('limite', array('options' => Configure::read('Query.limit'), 'empty' => 'Ilimitado', 'value' => isset($this->params['named']['limite']) ? $this->params['named']['limite'] : null));?></th>
			<th><?php echo $this->Form->end('Filtrar');?></th>
		</tr>
	</table>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th rowspan="2"><?php echo $this->Paginator->sort('nome');?></th>
			<th rowspan="2"><?php echo $this->Paginator->sort('Nº Inscrição', 'numero_inscricao');?></th>
			<th rowspan="2"><?php echo $this->Paginator->sort('RG', 'rg');?></th>
			<th colspan="<?php echo $qtdProvas;?>">Notas</th>
			<th rowspan="2">Classificação no Curso</th>
		</tr>
		<tr>
			<?php foreach ($inscricoes[0]['Nota'] as $nota):?>
				<th><?php echo $nota['Prova']['descricao'];?></th>
			<?php endforeach;?>
		</tr>
		<?php
		$i = 0;
		foreach ($inscricoes as $key => $inscricao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
			if (empty($inscricao['Selecao']['id'])) {
				continue;
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inscricao['Candidato']['nome']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Inscricao']['numero_inscricao']; ?>&nbsp;</td>
			<td><?php echo $inscricao['Candidato']['rg']; ?>&nbsp;</td>
			<?php foreach ($inscricao['Nota'] as $nota):?>
				<td><?php echo $nota['valor'];?>&nbsp;</td>
			<?php endforeach;?>
			<td><?php echo $classificacoes['id' . $inscricao['Inscricao']['id']];?>&nbsp;</td>
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
<?php else: ?>
	<h3>Não foram encontradas inscrições neste Processo Seletivo.</h3>
<?php endif;?>
</div>