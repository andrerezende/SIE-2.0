<div class="classificacoes form">
<?php echo $this->Form->create('Classificacao');?>
	<fieldset>
		<legend><?php __('Adicionar Classificacao'); ?></legend>
	<?php
		echo $this->Form->input('ordem');
		echo $this->Form->input('inscricao_id');
		echo $this->Form->input('cota_id');
		echo $this->Form->input('Lista');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>