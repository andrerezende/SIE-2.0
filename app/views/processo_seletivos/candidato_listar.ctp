<div class="processoSeletivos index">
	<h2><?php __('Processos Seletivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th class="actions">&nbsp;</th>
		<th><?php echo $this->Paginator->sort('Início das Inscrições', 'data_inicio_inscricoes');?></th>
		<th><?php echo $this->Paginator->sort('Fim das Inscrições', 'data_fim_inscricoes');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($processoSeletivos as $processoSeletivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td class="actions" style="white-space: normal;text-align: left;width: 60%;">
			<?php
			foreach ($processoSeletivo['Selecao'] as $selecao) {
				echo $campus[$selecao['campus_id']] .' - '.$cursos[$selecao['curso_id']];
				if (!in_array($selecao['id'], $inscricoes)) {
					echo $this->Html->link('Realizar Inscrição', array('controller' => 'inscricoes', 'action' => 'inscrever', $processoSeletivo['ProcessoSeletivo']['id'], $selecao['id']));
				} else {
					echo $this->Html->link('Imprimir Boleto', array('controller' => 'candidatos', 'action' => 'gerar_boleto', $processoSeletivo['ProcessoSeletivo']['id'], $selecao['id']));
				}
			}
			?>
		</td>
		<td><?php echo $this->Formatacao->dataHora($processoSeletivo['ProcessoSeletivo']['data_inicio_inscricoes']); ?>&nbsp;</td>
		<td><?php echo $this->Formatacao->dataHora($processoSeletivo['ProcessoSeletivo']['data_fim_inscricoes']); ?>&nbsp;</td>
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