<div class="span9">
	<div class="page-header">
		<h2>Configurações do Boleto</h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $boleto['Boleto']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $boleto['Boleto']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>Agência</dt>
		<dd><?php echo $boleto['Boleto']['agencia']; ?>&nbsp;</dd>
		<dt>Conta</dt>
		<dd><?php echo $boleto['Boleto']['conta']; ?>&nbsp;</dd>
		<dt>Convênio</dt>
		<dd><?php echo $boleto['Boleto']['convenio']; ?>&nbsp;</dd>
		<dt>Contrato</dt>
		<dd><?php echo $boleto['Boleto']['contrato']; ?>&nbsp;</dd>
		<dt>Carteira</dt>
		<dd><?php echo $boleto['Boleto']['carteira']; ?>&nbsp;</dd>
		<dt>Variação da Carteira</dt>
		<dd><?php echo $boleto['Boleto']['variacao_carteira']; ?>&nbsp;</dd>
		<dt>Formatação do Convênio</dt>
		<dd><?php echo $boleto['Boleto']['formatacao_convenio']; ?>&nbsp;</dd>
		<dt>Formatação do Nosso Número</dt>
		<dd><?php echo $boleto['Boleto']['formatacao_nosso_numero']; ?>&nbsp;</dd>
		<dt>Identificação</dt>
		<dd><?php echo $boleto['Boleto']['identificacao']; ?>&nbsp;</dd>
		<dt>CNPJ</dt>
		<dd><?php echo $boleto['Boleto']['cpf_cnpj']; ?>&nbsp;</dd>
		<dt>Endereço</dt>
		<dd><?php echo $boleto['Boleto']['endereco']; ?>&nbsp;</dd>
		<dt>Cidade / UF</dt>
		<dd><?php echo $boleto['Boleto']['cidade_uf']; ?>&nbsp;</dd>
		<dt>Cedente</dt>
		<dd><?php echo $boleto['Boleto']['cedente']; ?>&nbsp;</dd>
		<dt>Dias para o Vencimento'); ?>&nbsp;</dt>
		<dd><?php echo $boleto['Boleto']['dias_vencimento']; ?>&nbsp;</dd>
		<dt>Taxa</dt>
		<dd><?php echo $boleto['Boleto']['taxa']; ?>&nbsp;</dd>
		<dt>Demonstrativo 1</dt>
		<dd><?php echo $boleto['Boleto']['demonstrativo1']; ?>&nbsp;</dd>
		<dt>Demonstrativo 2</dt>
		<dd><?php echo $boleto['Boleto']['demonstrativo2']; ?>&nbsp;</dd>
		<dt>Demonstrativo 3</dt>
		<dd><?php echo $boleto['Boleto']['demonstrativo3']; ?>&nbsp;</dd>
		<dt>Instruções 1</dt>
		<dd><?php echo $boleto['Boleto']['instrucoes1']; ?>&nbsp;</dd>
		<dt>Instruções 2</dt>
		<dd><?php echo $boleto['Boleto']['instrucoes2']; ?>&nbsp;</dd>
		<dt>Instruções 3</dt>
		<dd><?php echo $boleto['Boleto']['instrucoes3']; ?>&nbsp;</dd>
		<dt>Instruções 4</dt>
		<dd><?php echo $boleto['Boleto']['instrucoes4']; ?>&nbsp;</dd>
		<dt>Quantidade</dt>
		<dd><?php echo $boleto['Boleto']['quantidade']; ?>&nbsp;</dd>
		<dt>Valor Unitário</dt>
		<dd><?php echo $boleto['Boleto']['valor_unitario']; ?>&nbsp;</dd>
		<dt>Aceite</dt>
		<dd><?php echo $boleto['Boleto']['aceite']; ?>&nbsp;</dd>
		<dt>Espécie></dt>
		<dd><?php echo $boleto['Boleto']['especie']; ?>&nbsp;</dd>
		<dt>Espécie DOC</dt>
		<dd><?php echo $boleto['Boleto']['especie_doc']; ?>&nbsp;</dd>
		<dt>Seleção</dt>
		<dd><?php echo $boleto['Boleto']['selecao_id']; ?>&nbsp;</dd>
	</dl>
</div>
