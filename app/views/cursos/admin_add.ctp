<div class="cursos form">
<?php echo $this->Form->create('Curso');?>
	<fieldset>
		<legend><?php __('Adicionar Curso'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('sigla');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>