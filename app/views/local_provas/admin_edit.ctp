<div class="span9">
	<div class="page-header">
		<h2>Editar Local de Prova</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar cursos', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['LocalProva']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
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
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
		?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
