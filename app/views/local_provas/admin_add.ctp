<div class="localProvas form">
<?php echo $this->Form->create('LocalProva');?>
	<fieldset>
		<legend><?php __('Adicionar Local de Prova'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('Selecao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>