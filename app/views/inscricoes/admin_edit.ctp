<div class="inscricoes form">
<?php echo $this->Form->create('Inscricao');?>
	<fieldset>
		<legend><?php __('Editar Inscrição'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidato_id');
		echo $this->Form->input('selecao_id');
		echo $this->Form->input('local_prova_id', array('empty' => 'Escolha a seleção primeiro'));
		echo $this->Form->input('data');
		echo $this->Form->input('especial_prova', array('type' => 'checkbox'));
		echo $this->Form->input('isento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>