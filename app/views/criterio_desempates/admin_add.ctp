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
				$("#CriterioDesempateCampo").attr("disabled", "disabled");
				$("#CriterioDesempateProvas").empty();
				provasLabel.prependTo("#CriterioDesempateProvas");
				provas.appendTo("#CriterioDesempateProvas").parent().show();
			} else {
				$("#CriterioDesempateCampo").removeAttr("disabled");
				$("#CriterioDesempateProvas").hide();
			}
		});
	});
</script>
<div class="criterioDesempates form">
<?php echo $this->Form->create('CriterioDesempate');?>
	<fieldset>
		<legend><?php __('Adicionar Critério de Desempate'); ?></legend>
	<?php
		echo $this->Form->input('processo_seletivo_id', array('empty' => 'Selecione'));
		echo $this->Form->input('tipo', array(
			'disabled' => true,
			'type' => 'select',
			'empty' => 'Selecione',
			'options' => Configure::ready('CriteriosDesempate'),
		));?>
		<div id="CriterioDesempateProvas" class="input select" style="display: none;"></div>
		<?php echo $this->Form->input('campo', array('disabled' => true));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>