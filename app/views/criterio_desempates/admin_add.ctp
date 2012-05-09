<script type="text/javascript">
	$(document).ready(function () {
		var provas = $(<?php echo json_encode($this->Form->input('CriterioDesempate.provas', array('div' => false, 'label' => false, 'type' => 'select')));?>);
		var provasLabel = $(<?php echo json_encode($this->Form->label('CriterioDesempate.provas', 'Prova'));?>);
		$("#CriterioDesempateProcessoSeletivoId").change(function () {
			$("#CriterioDesempateTipo").removeAttr("disabled");
			var postData = {
				"data[processo_seletivo_id]": $("option:selected", this).val()
			};
			$.ajax({
				type: "POST",
				url: "<?php echo Router::url(array('admin' => false, 'controller' => 'criterio_desempates', 'action' => 'ajax_get_provas'));?>",
				data: postData,
				success: function(data) {
					$(provas).html(data);
				}
			});
		});
		$("#CriterioDesempateTipo").change(function () {
			if ($("option:selected", this).val() == 2) {
				$("#CriterioDesempateCampo").attr("readonly", "readonly");
				$("#CriterioDesempateProvas").empty();
				provasLabel.prependTo("#CriterioDesempateProvas");
				provas.appendTo("#CriterioDesempateProvas").parent().show();
			} else {
				$("#CriterioDesempateCampo").removeAttr("readonly");
				$("#CriterioDesempateProvas").hide();
			}
		});
		provas.change(function() {
			$("#CriterioDesempateProvaId").val($("option:selected", this).val());
			$("#CriterioDesempateCampo").val($("option:selected", this).text());
		});
	});
</script>
<div class="span9">
	<div class="page-header">
		<h2>Adicionar Critério de Desempate</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar critérios de desempate', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
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
		echo $this->Form->input('processo_seletivo_id', array('empty' => 'Selecione'));
		echo $this->Form->input('tipo', array(
			'disabled' => true,
			'type' => 'select',
			'empty' => 'Selecione',
			'options' => Configure::read('CriteriosDesempate'),
		));
		echo $this->Form->input('prova_id', array('type' => 'hidden'));
		?>
		<div id="CriterioDesempateProvas" class="input select" style="display: none;"></div>
		<?php echo $this->Form->input('campo', array('readonly' => true));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
