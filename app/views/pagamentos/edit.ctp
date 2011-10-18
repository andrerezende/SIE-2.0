<div class="pagamentos form">
<?php echo $this->Form->create('Pagamento');?>
	<fieldset>
		<legend><?php __('Edit Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('inscricao_id');
		echo $this->Form->input('arqretorno');
		echo $this->Form->input('data_pagamento');
		echo $this->Form->input('data_retorno');
		echo $this->Form->input('data_importacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pagamento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pagamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
	</ul>
</div>