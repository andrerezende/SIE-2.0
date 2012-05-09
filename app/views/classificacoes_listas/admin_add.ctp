<div class="classificacoesListas form">
<?php echo $this->Form->create('ClassificacoesLista');?>
	<fieldset>
		<legend><?php __('Adicionar Classificações/Lista'); ?></legend>
	<?php
		echo $this->Form->input('classificacao_id');
		echo $this->Form->input('lista_id');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>