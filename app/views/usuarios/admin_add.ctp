<div class="span9">
	<div class="page-header">
		<h2>Adicionar Usuário</h2>
		<small><?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar usuários', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?></small>
	</div>

<?php echo $this->Form->create('Usuario', array(
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
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('login');
		echo $this->Form->input('senha', array('type' => 'password'));
		echo $this->Form->input('grupo_id');
		?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
