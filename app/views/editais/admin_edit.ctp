<script type="text/javascript">
	$(document).ready(function() {
		$(".date").datetimepicker( $.datepicker.regional[ "pt-BR" ] );
	});
</script>

<div class="span9">
	<div class="page-header">
		<h2>Editar Edital</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Editais', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['Edital']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('Edital', array(
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
		echo $this->Form->input('numero');
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date', 'value' => $this->Formatacao->data($this->data['Edital']['data'])));
		echo $this->Form->input('descricao');
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>