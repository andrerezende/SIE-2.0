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
		$("#CandidatoRg").mask("?99999999999999999999",{placeholder:" "});
	});
</script>
<div class="candidatos form container container_2">
<?php echo $this->Form->create('Candidato');?>
	<fieldset>
		<legend><?php __('Adicionar Candidato'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('data_nascimento', array('dateFormat' => 'DMY', 'separator' => '', 'minYear' => date('Y') - 100, 'empty' => '', 'value' => ''));
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('orgao_expedidor');
		echo $this->Form->input('orgao_expedidor_unidade_federativa_id', array('empty' => 'Selecione o estado', 'options' => $unidadeFederativas));
		echo $this->Form->input('data_expedicao', array('dateFormat' => 'DMY', 'separator' => '', 'minYear' => date('Y') - 100, 'empty' => '', 'value' => ''));
		echo $this->Form->input('nacionalidade_pais_id');
		echo $this->Form->input('naturalidade_unidade_federativa_id', array('empty' => 'Selecione o estado', 'options' => $unidadeFederativas));
		echo $this->Form->input('naturalidade_municipio_id', array('empty' => 'Escolha um estado primeiro', 'disabled' => true));
		echo $this->Form->input('sexo_id');
		echo $this->Form->input('pais_id');
		echo $this->Form->input('unidade_federativa_id', array('empty' => 'Selecione o estado'));
		echo $this->Form->input('municipio_id', array('empty' => 'Escolha um estado primeiro', 'disabled' => true));
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep');
		echo $this->Form->input('endereco');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('email');
		echo $this->Form->input('estado_civil_id');
		echo $this->Form->input('necessidade_especial_id', array('empty' => 'Nenhuma'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>