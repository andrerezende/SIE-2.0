<div class="necessidadeEspeciais form">
<?php echo $this->Form->create('NecessidadeEspecial');?>
	<fieldset>
		<legend><?php __('Adicionar Necessidade Especial'); ?></legend>
	<?php
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>