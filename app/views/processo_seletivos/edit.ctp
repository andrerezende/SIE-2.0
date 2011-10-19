<div class="processoSeletivos form">
<?php echo $this->Form->create('ProcessoSeletivo');?>
	<fieldset>
		<legend><?php __('Editar Processo Seletivo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('edital_id');
		echo $this->Form->input('data_inicio_inscricoes');
		echo $this->Form->input('data_fim_inscricoes');
		echo $this->Form->input('hora_inicio_inscricoes');
		echo $this->Form->input('hora_fim_inscricoes');
		echo $this->Form->input('ativo_web');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>