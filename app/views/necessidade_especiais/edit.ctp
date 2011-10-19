<div class="necessidadeEspeciais form">
<?php echo $this->Form->create('NecessidadeEspecial');?>
	<fieldset>
		<legend><?php __('Editar Necessidade Especial'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>