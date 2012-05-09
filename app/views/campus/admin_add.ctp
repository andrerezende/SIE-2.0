<div class="span9">
	<div class="page-header">
		<h2>Adicionar Campus</h2>
		<small><?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar campi', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?></small>
	</div>

<?php echo $this->Form->create('Campus', array(
	'inputDefaults' => array(
		'class' => 'span4',
		'div' => 'control-group',
		'label' => array('class' => 'control-label'),
		'between' => '<div class="controls">',
		'after' => '</div>',
		'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
	)
));?>
	<fieldset>
		<?php echo $this->Form->input('nome');?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
