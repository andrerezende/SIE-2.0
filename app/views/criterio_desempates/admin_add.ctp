<div class="criterioDesempates form">
<?php echo $this->Form->create('CriterioDesempate');?>
	<fieldset>
		<legend><?php __('Adicionar Critério de Desempate'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('campo', array(
			'type' => 'select',
			'empty' => 'Selecione',
			'options' => Configure::read('CriteriosDesempate'),
		));
		echo $this->Form->input('processo_seletivo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>