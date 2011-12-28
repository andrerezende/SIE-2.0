<div class="paises form">
<?php echo $this->Form->create('Pais');?>
	<fieldset>
		<legend><?php __('Editar País'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('nacionalidade');
		echo $this->Form->input('sigla');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>