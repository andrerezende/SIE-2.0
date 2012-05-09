<script type="text/javascript">
	$(document).ready(function() {
		$(".date").datepicker();
	});
</script>
<div class="span9">
	<div class="page-header">
		<h2>Editar Inscrição</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar inscrições', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['Inscricao']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('Inscricao', array(
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
		echo $this->Form->input('candidato_id');
		echo $this->Form->input('selecao_id');
		echo $this->Form->input('local_prova_id', array('empty' => 'Escolha a seleção primeiro'));
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date'));
		echo $this->Form->input('especial_prova', array('type' => 'checkbox', 'label' => false, 'class' => 'null', 'before' => '<label class="checkbox">', 'after' => 'Condições especiais para a realização de prova</div>', 'format' => array('label', 'between', 'before', 'input', 'after', 'error')));
		echo $this->Form->input('isento', array('type' => 'checkbox', 'label' => false, 'class' => 'null', 'before' => '<label class="checkbox">', 'after' => 'Isento</div>', 'format' => array('label', 'between', 'before', 'input', 'after', 'error')));
		?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>
