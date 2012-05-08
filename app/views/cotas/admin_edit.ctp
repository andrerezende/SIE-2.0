<div class="span9">
	<div class="page-header">
		<h2>Editar Cota</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Cotas', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['Cota']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('Cota', array(
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
		echo $this->Form->input('quantidade');
		echo $this->Form->input('selecao_id', array('label' => 'Seleção'));
		?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
