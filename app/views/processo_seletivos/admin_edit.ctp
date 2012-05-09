<script type="text/javascript">
	$(document).ready(function() {
		$(".date").datetimepicker( $.datepicker.regional[ "pt-BR" ] );
	});
</script>

<div class="span9">
	<div class="page-header">
		<h2>Editar Processo Seletivo</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Processos Seletivos', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['ProcessoSeletivo']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('ProcessoSeletivo', array(
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
		<legend><?php __(' Processo Seletivo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('edital_id');
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
		echo $this->Form->input('data_inicio_inscricoes', array('type' => 'text', 'class' => 'date', 'value' => $this->Formatacao->dataHora($this->data['ProcessoSeletivo']['data_inicio_inscricoes'])));
		echo $this->Form->input('data_fim_inscricoes', array('type' => 'text', 'class' => 'date', 'value' => $this->Formatacao->dataHora($this->data['ProcessoSeletivo']['data_fim_inscricoes'])));
		echo $this->Form->input('ativo_web', array(
			'type' => 'checkbox',
			'label' => false,
			'class' => 'null',
			'before' => '<label class="checkbox">',
			'after' => 'Ativo</div>',
			'format' => array('label', 'between', 'before', 'input', 'after', 'error')
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>