<div class="span9">
	<div class="page-header">
		<h2>Adicionar Necessidade Especial</h2>
		<small><?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Pagamentos', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?></small>
	</div>

<?php echo $this->Form->create('Pagamento', array(
	'type' => 'file',
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
		echo $this->Form->input('arqretorno', array('type' => 'file', 'label' => 'Arquivo de Retorno'));
		echo $this->Form->submit('Enviar', array('id' => 'SubmitConciliacao'));
		echo $this->Form->end();
		?>
	</fieldset>
</div>