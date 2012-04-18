<div class="span9">
	<div class="page-header">
		<h2>Adicionar Local de Prova</h2>
		<small><?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar locais de prova', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?></small>
	</div>

<?php echo $this->Form->create('LocalProva', array(
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
		<?php echo $this->Form->input('descricao', array('label' => 'Descrição'));?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
