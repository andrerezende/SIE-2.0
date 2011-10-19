<div class="pagamentos form">
<?php echo $this->Form->create('Pagamento');?>
	<fieldset>
		<legend><?php __('Editar Pagamento'); ?></legend>
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