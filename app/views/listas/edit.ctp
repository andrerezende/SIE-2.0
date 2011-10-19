<div class="listas form">
<?php echo $this->Form->create('Lista');?>
	<fieldset>
		<legend><?php __('Editar Lista'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Classificacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>