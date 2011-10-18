<div class="inscricoes form">
<?php echo $this->Form->create('Inscricao');?>
	<fieldset>
		<legend><?php __('Adicionar Inscrição'); ?></legend>
	<?php
		echo $this->Form->input('candidato_id');
		echo $this->Form->input('selecao_id');
		echo $this->Form->input('data');
		echo $this->Form->input('especial_prova');
		echo $this->Form->input('isento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>