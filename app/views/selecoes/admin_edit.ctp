<?php echo $this->Html->script('jquery.price_format.js');?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#SelecaoValorInscricao').priceFormat({
			prefix: '',
			centsSeparator: '.',
			thousandsSeparator: ''
		});
	});
</script>
<div class="selecoes form">
<?php echo $this->Form->create('Selecao');?>
	<fieldset>
		<legend><?php __('Editar Seleção'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('campus_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('processo_seletivo_id');
		echo $this->Form->input('ativo_web', array('type' => 'checkbox'));
		echo $this->Form->input('vagas');
		echo $this->Form->input('encerrado', array('type' => 'checkbox'));
		echo $this->Form->input('valor_inscricao', array('label' => 'Valor da Inscrição'));
		echo $this->Form->input('LocalProva', array('multiple' => 'checkbox', 'label' => 'Local de Prova'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>