<div class="span9">
	<div class="page-header">
		<h2>Editar Critério de Desempate</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar critérios de desempate', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['CriterioDesempate']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('CriterioDesempate', array(
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
		echo $this->Form->input('processo_seletivo_id', array('empty' => 'Selecione'));
		echo $this->Form->input('prova_id', array('type' => 'hidden'));
		echo $this->Form->input('tipo', array(
			'disabled' => true,
			'type' => 'select',
			'empty' => 'Selecione',
			'options' => Configure::read('CriteriosDesempate'),
		));
		echo $this->Form->input('campo', array(
			'type' => 'select',
			'empty' => 'Selecione',
			'options' => Configure::read('CriteriosDesempate'),
		));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
