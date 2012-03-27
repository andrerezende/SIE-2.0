<div class="boletos index">
	<h4><?php echo $this->Html->link(__('Adicionar Boleto', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Boletos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('Descrição', 'descricao');?></th>
		<th><?php echo $this->Paginator->sort('Agência', 'agencia');?></th>
		<th><?php echo $this->Paginator->sort('conta');?></th>
		<th><?php echo $this->Paginator->sort('identificacao');?></th>
		<th><?php echo $this->Paginator->sort('CNPJ', 'cpf_cnpj');?></th>
		<th><?php echo $this->Paginator->sort('Seleção', 'selecao_id');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($boletos as $boleto):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $boleto['Boleto']['descricao']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['agencia']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['conta']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['identificacao']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['cpf_cnpj']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['selecao_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $boleto['Boleto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $boleto['Boleto']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $boleto['Boleto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $boleto['Boleto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>