<div class="editais form">
<?php echo $this->Form->create('Edital');?>
	<fieldset>
		<legend><?php __('Adicionar Edital'); ?></legend>
	<?php
		echo $this->Form->input('numero');
		echo $this->Form->input('data');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>