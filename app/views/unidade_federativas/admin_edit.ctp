<div class="unidadeFederativas form">
<?php echo $this->Form->create('UnidadeFederativa');?>
	<fieldset>
		<legend><?php __('Editar Unidade Federativa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('sigla');
		echo $this->Form->input('pais_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>