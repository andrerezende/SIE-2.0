<div class="estadoCivis form">
<?php echo $this->Form->create('EstadoCivil');?>
	<fieldset>
		<legend><?php __('Editar Estado Civil'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>