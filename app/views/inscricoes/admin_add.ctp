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
		$("#InscricaoSelecaoId").ufChangeHandler({
			url: "/local_provas/ajax_get_local_prova",
			updateId: "#InscricaoLocalProvaId"
		});
	});
</script>
<div class="inscricoes form container container_2">
	<h2 class="title"><?php __('Nova Inscrição'); ?></h2>
	<div style="clear: both;">&nbsp;</div>
	<div clas="entry">
	<?php
		echo $this->Form->create('Inscricao');
		echo $this->Form->input('candidato_id', array('type' => 'hidden', 'value' => $userData['Usuario']['id']));
		echo $this->Form->input('selecao_id');
		echo $this->Form->input('local_prova_id', array('empty' => 'Escolha a seleção primeiro'));
		echo $this->Form->input('data');
		echo $this->Form->input('especial_prova', array('type' => 'checkbox'));
		echo $this->Form->input('isento');
		echo $this->Form->end(__('Submit', true));
	?>
	</div>
</div>