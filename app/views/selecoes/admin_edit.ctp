<div class="selecoes form">
<?php echo $this->Form->create('Selecao');?>
	<fieldset>
		<legend><?php __('Editar Seleção'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('campus_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('processo_seletivo_id');
		echo $this->Form->input('ativo_web', array('type' => 'checkbox'));
		echo $this->Form->input('vagas');
		echo $this->Form->input('encerrado', array('type' => 'checkbox'));
		echo $this->Form->input('LocalProva', array('multiple' => 'checkbox', 'label' => 'Local de Prova'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>