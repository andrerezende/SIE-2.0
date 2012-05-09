<script type="text/javascript">
	$.fn.ufChangeHandler = function(options) {
		var opts = $.extend({}, $.fn.ufChangeHandler.defaults, options);
		this.bind("change", opts, function(event) {
			var unidade_federativa_id = $("option:selected", this).val();
			var postData = {
				"data[Selecao][id]": unidade_federativa_id
			};
			$.ajax({
				type: "POST",
				url: event.data.url,
				data: postData,
				success: function(data) {
					$(event.data.updateId).html(data);
					$(event.data.updateId).removeAttr('disabled');
				}
			});
			return false;
		});
	}
	$.fn.ufChangeHandler.defaults = {
	  url: "",
	  updateId: null
	};
	$(document).ready(function() {
		$(".date").datepicker();
		$("#InscricaoSelecaoId").ufChangeHandler({
			url: "/local_provas/ajax_get_local_prova",
			updateId: "#InscricaoLocalProvaId"
		});
	});
</script>
<div class="span9">
	<div class="page-header">
		<h2>Adicionar Inscrição</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Inscrições', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
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
		echo $this->Form->input('candidato_id', array('type' => 'hidden', 'value' => $userData['Usuario']['id']));
		echo $this->Form->input('selecao_id');
		echo $this->Form->input('local_prova_id', array('empty' => 'Escolha a seleção primeiro'));
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date'));
		echo $this->Form->input('especial_prova', array('type' => 'checkbox', 'label' => false, 'class' => 'null', 'before' => '<label class="checkbox">', 'after' => 'Condições especiais para a realização de prova</div>', 'format' => array('label', 'between', 'before', 'input', 'after', 'error')));
		echo $this->Form->input('isento', array('type' => 'checkbox', 'label' => false, 'class' => 'null', 'before' => '<label class="checkbox">', 'after' => 'Isento</div>', 'format' => array('label', 'between', 'before', 'input', 'after', 'error')));
		echo $this->Form->end(__('Submit', true));
		?>
	</fieldset>
</div>
