<div class="municipios form">
<?php echo $this->Form->create('Municipio');?>
	<fieldset>
		<legend><?php __('Editar Município'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('unidade_federativa_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>