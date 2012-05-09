<?php echo $this->Html->script('jquery.maskedinput-1.3.min', array('inline' => false));?>
<script type="text/javascript">
	$.fn.ufChangeHandler = function(options) {
		var opts = $.extend({}, $.fn.ufChangeHandler.defaults, options)
		this.bind("change", opts, function(event) {
			var unidade_federativa_id = $("option:selected", this).val()
			var postData = {
				"data[Candidato][unidade_federativa_id]": unidade_federativa_id
			}
			$.ajax({
				type: "POST",
				url: event.data.url,
				data: postData,
				success: function(data) {
					$(event.data.updateId).html(data)
					$(event.data.updateId).removeAttr('disabled')
				}
			})
			return false
		})
	}
	$(document).ready(function() {
		$("#CandidatoUnidadeFederativaId").ufChangeHandler({
			url: "/municipios/ajax_get_municipios",
			updateId: "#CandidatoMunicipioId"
		})
		$("#CandidatoNaturalidadeUnidadeFederativaId").ufChangeHandler({
			url: "/municipios/ajax_get_municipios",
			updateId: "#CandidatoNaturalidadeMunicipioId"
		})
		$("#CandidatoTelefone").mask("(99) 9999-9999")
		$("#CandidatoCelular").mask("(99) 9999-9999")
		$("#CandidatoCpf").mask("999.999.999-99")
		$("#CandidatoCep").mask("99999-999")
		$("#CandidatoRg").mask("?99999999999999999999",{placeholder:" "})
		$(".date").datepicker()
	})
</script>
<div class="span9">
	<div class="page-header">
		<h2>Editar Candidato</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Candidatos', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $this->data['Candidato']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

<?php echo $this->Form->create('Candidato', array(
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
		echo $this->Form->input('nome');
		echo $this->Form->input('data_nascimento', array('type' => 'text', 'class' => 'date', 'label' => 'Data de Nascimento'));
		echo $this->Form->input('cpf', array('label' => 'CPF'));
		echo $this->Form->input('rg', array('label' => 'RG'));
		echo $this->Form->input('orgao_expedidor', array('label' => 'Órgão Expedidor'));
		echo $this->Form->input('orgao_expedidor_unidade_federativa_id', array('empty' => 'Selecione o estado', 'options' => $unidadeFederativas, 'label' => 'UF Órgão Expedidor'));
		echo $this->Form->input('data_expedicao', array('type' => 'text', 'class' => 'date', 'label' => 'Data de Expedição'));
		echo $this->Form->input('nacionalidade_pais_id');
		echo $this->Form->input('naturalidade_unidade_federativa_id', array('empty' => 'Selecione o estado', 'options' => $unidadeFederativas));
		echo $this->Form->input('naturalidade_municipio_id', array('empty' => 'Escolha um estado primeiro', 'disabled' => true));
		echo $this->Form->input('sexo_id');
		echo $this->Form->input('pais_id', array('label' => 'País'));
		echo $this->Form->input('unidade_federativa_id', array('empty' => 'Selecione o estado'));
		echo $this->Form->input('municipio_id', array('empty' => 'Escolha um estado primeiro', 'disabled' => true));
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep', array('label' => 'CEP'));
		echo $this->Form->input('endereco', array('label' => 'Endereço'));
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('email');
		echo $this->Form->input('estado_civil_id');
		echo $this->Form->input('necessidade_especial_id', array('empty' => 'Nenhuma'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
