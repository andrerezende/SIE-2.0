<div class="grupos form">
<?php echo $this->Form->create('Grupo');?>
	<fieldset>
		<legend><?php __('Editar Grupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>