<div class="sexos form">
<?php echo $this->Form->create('Sexo');?>
	<fieldset>
		<legend><?php __('Editar Sexo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>