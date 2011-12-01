<?php echo $this->Html->script('jquery.maskedinput-1.3.min', array('inline' => false));?>
<script type="text/javascript">
	$.fn.ufChangeHandler = function(options) {
		var opts = $.extend({}, $.fn.ufChangeHandler.defaults, options);
		this.bind("change", opts, function(event) {
			var unidade_federativa_id = $("option:selected", this).val();
			var postData = {
				"data[Candidato][unidade_federativa_id]": unidade_federativa_id
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
	  url: "/municipios/ajax_get_municipios",
	  updateId: null
	};
	$(document).ready(function() {
		$("#CandidatoUnidadeFederativaId").ufChangeHandler({
			url: "/municipios/ajax_get_municipios",
			updateId: "#CandidatoMunicipioId"
		});
		$("#CandidatoNaturalidadeUnidadeFederativaId").ufChangeHandler({
			url: "/municipios/ajax_get_municipios",
			updateId: "#CandidatoNaturalidadeMunicipioId"
		});
		$("#CandidatoTelefone").mask("(99) 9999-9999");
		$("#CandidatoCelular").mask("(99) 9999-9999");
		$("#CandidatoCpf").mask("999.999.999-99");
		$("#CandidatoCep").mask("99999-999");
		$("#CandidatoRg").mask("?99999999999999999999", {placeholder:""});
	});
</script>
<div class="candidatos form container container_2">
	<h4>
		<?php echo $this->Html->link($this->Html->image('action_print.gif') . ' Imprimir', array('controller' => 'candidato', 'action' => 'imprimir'), array('escape' => false));?>
		/ <?php echo $this->Html->link($this->Html->image('file_acrobat.gif') . ' PDF', '#', array('escape' => false));?></h4>
	<h2 class="title">Ficha de Inscrição</h2>
	<div style="clear: both;">&nbsp;</div>
	<div clas="entry">
		<?php
		echo $this->Form->create('Candidato');
		echo $this->Form->input('id');
		echo $this->Form->input('nome', array('label' => 'Nome Completo'));
		echo $this->Form->input('data_nascimento', array('dateFormat' => 'DMY', 'separator' => '', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'empty' => '', 'value' => ''));
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('Usuario.senha');
		echo $this->Form->input('Usuario.confirmar_senha', array('label' => 'Confirmar Senha'));
		echo $this->Form->input('orgao_expedidor');
		echo $this->Form->input('orgao_expedidor_unidade_federativa_id', array('empty' => 'Selecione o estado', 'options' => $unidadeFederativas));
		echo $this->Form->input('data_expedicao', array('dateFormat' => 'DMY', 'separator' => '', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'empty' => '', 'value' => ''));
		echo $this->Form->input('nacionalidade_pais_id', array('empty' => 'Selecione o país', 'options' => $paises));
		echo $this->Form->input('naturalidade_unidade_federativa_id', array('empty' => 'Selecione o estado', 'options' => $unidadeFederativas));
		echo $this->Form->input('naturalidade_municipio_id', array('empty' => 'Escolha um estado primeiro'));
		echo $this->Form->input('sexo_id');
		echo $this->Form->input('pais_id', array('empty' => 'Selecione o país'));
		echo $this->Form->input('unidade_federativa_id', array('empty' => 'Selecione o estado'));
		echo $this->Form->input('municipio_id', array('empty' => 'Escolha um estado primeiro'));
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep');
		echo $this->Form->input('endereco');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('email');
		echo $this->Form->input('estado_civil_id');
		echo $this->Form->input('necessidade_especial_id', array('empty' => 'Nenhuma'));
		echo $this->Form->end(__('Submit', true));
		?>
	</div>
</div>