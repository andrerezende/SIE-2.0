<div class="estadoCivis form">
<?php echo $this->Form->create('EstadoCivil');?>
	<fieldset>
		<legend><?php __('Adicionar Estado Civil'); ?></legend>
	<?php
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>