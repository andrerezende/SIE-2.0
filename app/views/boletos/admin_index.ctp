<div class="boletos index">
	<h4><?php echo $this->Html->link(__('Adicionar Boleto', true), array('action' => 'add')); ?></h4>
	<h2><?php __('Boletos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('Agência', 'agencia');?></th>
		<th><?php echo $this->Paginator->sort('conta');?></th>
		<th><?php echo $this->Paginator->sort('Convênio', 'convenio');?></th>
		<th><?php echo $this->Paginator->sort('contrato');?></th>
		<th><?php echo $this->Paginator->sort('carteira');?></th>
		<th><?php echo $this->Paginator->sort('identificacao');?></th>
		<th><?php echo $this->Paginator->sort('CNPJ', 'cpf_cnpj');?></th>
		<th><?php echo $this->Paginator->sort('Cidade / UF', 'cidade_uf');?></th>
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
		<td><?php echo $boleto['Boleto']['agencia']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['conta']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['convenio']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['contrato']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['carteira']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['identificacao']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['cpf_cnpj']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['cidade_uf']; ?>&nbsp;</td>
		<td><?php echo $boleto['Boleto']['selecao_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $boleto['Boleto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $boleto['Boleto']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $boleto['Boleto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $boleto['Boleto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

<?php if ($this->Paginator->numbers()):?>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
		<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
<?php endif;?>
</div>