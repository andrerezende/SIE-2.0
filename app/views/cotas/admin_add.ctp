<div class="cotas form">
<?php echo $this->Form->create('Cota');?>
	<fieldset>
		<legend><?php __('Adicionar Cota'); ?></legend>
	<?php
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
		echo $this->Form->input('quantidade');
		echo $this->Form->input('selecao_id', array('label' => 'Seleção'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>