<script type="text/javascript">
	$(document).ready(function() {
		var postData = {
			"data[id]": $("#InscricaoSelecaoId").val()
		};
		$.ajax({
			type: "POST",
			url: "/local_provas/ajax_get_local_prova",
			data: postData,
			success: function(data) {
				$("#InscricaoLocalProvaId").html(data);
				$("#InscricaoLocalProvaId").removeAttr('disabled');
			}
		});
	});
</script>
<div class="inscricoes form container container_2">
	<h2 class="title"><?php __('Nova Inscrição'); ?></h2>
	<div style="clear: both;">&nbsp;</div>
	<div clas="entry">
	<?php
		echo $this->Form->create('Inscricao');
		echo $this->Form->input('candidato_id', array('type' => 'hidden', 'value' => $userData['Usuario']['candidato_id']));
		echo $this->Form->input('selecao_id', array('type' => 'hidden', 'value' => $selecao_id));
		echo $this->Form->input('local_prova_id', array('label' => 'Local de Prova', 'empty' => 'Carregando...'));
		echo $this->Form->input('data', array('type' => 'hidden', 'value' => date('Y-m-d H:m:s')));
		echo $this->Form->input('especial_prova', array('type' => 'checkbox', 'label' => 'Condições especiais para a realização de prova'));
		echo $this->Form->input('isento');
		echo $this->Form->end(__('Submit', true));
	?>
	</div>
</div>