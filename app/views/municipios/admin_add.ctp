<div class="span9">
	<div class="page-header">
		<h2>Adicionar Município</h2>
		<small><?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar municípios', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?></small>
	</div>

<?php echo $this->Form->create('Municipio');?>
	<fieldset>
		<?php
		echo $this->Form->input('unidade_federativa_id');
		echo $this->Form->input('nome');
		?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
