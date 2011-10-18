<div class="provas form">
<?php echo $this->Form->create('Prova');?>
	<fieldset>
		<legend><?php __('Adicionar Prova'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('peso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>