<div class="notas form">
<?php echo $this->Form->create('Nota');?>
	<fieldset>
		<legend><?php __('Adicionar Nota'); ?></legend>
	<?php
		echo $this->Form->input('valor');
		echo $this->Form->input('prova_id');
		echo $this->Form->input('inscricao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>