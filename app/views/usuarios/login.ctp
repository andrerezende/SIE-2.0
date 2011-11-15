<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Adicionar Usuário'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
		echo $this->Form->input('grupo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>