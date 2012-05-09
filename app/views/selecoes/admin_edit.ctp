<?php echo $this->Html->script('jquery.price_format');?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#SelecaoValorInscricao").priceFormat({
			prefix: '',
			thousandsSeparator: '',
		});
	});
</script>
<div class="span9">
	<div class="page-header">
		<h2>Editar Seleção</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Seleções', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['Selecao']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('Selecao', array(
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
		echo $this->Form->input('encerrado', array(
			'type' => 'checkbox',
			'label' => false,
			'class' => null,
			'before' => '<label class="checkbox">',
			'after' => 'Encerrado</div>',
			'format' => array('label', 'between', 'before', 'input', 'after', 'error')
		));
		echo $this->Form->input('ativo_web', array(
			'type' => 'checkbox',
			'label' => false,
			'class' => null,
			'before' => '<label class="checkbox">',
			'after' => 'Ativo</div>',
			'format' => array('label', 'between', 'before', 'input', 'after', 'error')
		));
		echo $this->Form->input('descricao');
		echo $this->Form->input('campus_id', array('empty' => '-- Selecione --'));
		echo $this->Form->input('curso_id', array('empty' => '-- Selecione --'));
		echo $this->Form->input('processo_seletivo_id', array('empty' => '-- Selecione --'));
		echo $this->Form->input('vagas');
		echo $this->Form->input('valor_inscricao', array('label' => 'Valor da Inscrição'));
		echo $this->Form->input('LocalProva', array(
			'multiple' => 'checkbox',
			'label' => 'Local de Prova',
			'class' => null,
			'format' => array('label', 'between', 'before', 'input', 'after', 'error')
		));

		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
