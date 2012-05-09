<div class="span9">
	<div class="page-header">
		<h2>Configurações do Boleto</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Boletos', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

<?php echo $this->Form->create('Boleto', array(
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
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
		echo $this->Form->input('agencia', array('label' => 'Agência'));
		echo $this->Form->input('conta');
		echo $this->Form->input('convenio', array('label' => 'Convênio'));
		echo $this->Form->input('contrato');
		echo $this->Form->input('carteira');
		echo $this->Form->input('variacao_carteira', array('label' => 'Variação da Carteira'));
		echo $this->Form->input('formatacao_convenio', array('label' => 'Formatação do Convênio'));
		echo $this->Form->input('formatacao_nosso_numero', array('label' => 'Formatação do Nosso Número'));
		echo $this->Form->input('identificacao', array('label' => 'Identificação'));
		echo $this->Form->input('cpf_cnpj', array('label' => 'CNPJ'));
		echo $this->Form->input('endereco', array('label' => 'Endereço'));
		echo $this->Form->input('cidade_uf', array('label' => 'Cidade / UF'));
		echo $this->Form->input('cedente');
		echo $this->Form->input('dias_vencimento', array('label' => 'Dias para o vencimento'));
		echo $this->Form->input('taxa');
		echo $this->Form->input('demonstrativo1', array('label' => 'Demonstrativo 1'));
		echo $this->Form->input('demonstrativo2', array('label' => 'Demonstrativo 2'));
		echo $this->Form->input('demonstrativo3', array('label' => 'Demonstrativo 3'));
		echo $this->Form->input('instrucoes1', array('label' => 'Instruções 1'));
		echo $this->Form->input('instrucoes2', array('label' => 'Instruções 2'));
		echo $this->Form->input('instrucoes3', array('label' => 'Instruções 3'));
		echo $this->Form->input('instrucoes4', array('label' => 'Instruções 4'));
		echo $this->Form->input('quantidade');
		echo $this->Form->input('valor_unitario', array('label' => 'Valor Unitário'));
		echo $this->Form->input('aceite');
		echo $this->Form->input('especie', array('label' => 'Espécie'));
		echo $this->Form->input('especie_doc', array('label' => 'Espécie DOC'));
		echo $this->Form->input('selecao_id', array('type' => 'hidden', 'value' => $selecao_id));
		?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>