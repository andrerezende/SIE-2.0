<div class="span9">
	<div class="page-header">
		<h2>Configurações do Boleto</h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $boleto['Boleto']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $boleto['Boleto']['id']), array('class' => 'btn btn-danger', 'escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $boleto['Boleto']['id'])); ?>
	</div>
	<dl class="dl-horizontal">
		<dt><?php __('Agência'); ?></dt>
		<dd><?php echo $boleto['Boleto']['agencia']; ?>&nbsp;</dd>
		<dt><?php __('Conta'); ?></dt>
		<dd><?php echo $boleto['Boleto']['conta']; ?>&nbsp;</dd>
		<dt><?php __('Convênio'); ?></dt>
		<dd><?php echo $boleto['Boleto']['convenio']; ?>&nbsp;</dd>
		<dt><?php __('Contrato'); ?></dt>
		<dd><?php echo $boleto['Boleto']['contrato']; ?>&nbsp;</dd>
		<dt><?php __('Carteira'); ?></dt>
		<dd><?php echo $boleto['Boleto']['carteira']; ?>&nbsp;</dd>
		<dt><?php __('Variação da Carteira'); ?></dt>
		<dd><?php echo $boleto['Boleto']['variacao_carteira']; ?>&nbsp;</dd>
		<dt><?php __('Formatação do Convênio'); ?></dt>
		<dd><?php echo $boleto['Boleto']['formatacao_convenio']; ?>&nbsp;</dd>
		<dt><?php __('Formatacao do Nosso Número'); ?></dt>
		<dd><?php echo $boleto['Boleto']['formatacao_nosso_numero']; ?>&nbsp;</dd>
		<dt><?php __('Identificação'); ?></dt>
		<dd><?php echo $boleto['Boleto']['identificacao']; ?>&nbsp;</dd>
		<dt><?php __('CNPJ'); ?></dt>
		<dd><?php echo $boleto['Boleto']['cpf_cnpj']; ?>&nbsp;</dd>
		<dt><?php __('Endereço'); ?></dt>
		<dd><?php echo $boleto['Boleto']['endereco']; ?>&nbsp;</dd>
		<dt><?php __('Cidade / UF'); ?></dt>
		<dd><?php echo $boleto['Boleto']['cidade_uf']; ?>&nbsp;</dd>
		<dt><?php __('Cedente'); ?></dt>
		<dd><?php echo $boleto['Boleto']['cedente']; ?>&nbsp;</dd>
		<dt><?php __('Dias para o Vencimento'); ?>&nbsp;</dt>
		<dd><?php echo $boleto['Boleto']['dias_vencimento']; ?>&nbsp;</dd>
		<dt><?php __('Taxa'); ?></dt>
		<dd><?php echo $boleto['Boleto']['taxa']; ?>&nbsp;</dd>
		<dt><?php __('Demonstrativo 1'); ?></dt>
		<dd><?php echo $boleto['Boleto']['demonstrativo1']; ?>&nbsp;</dd>
		<dt><?php __('Demonstrativo 2'); ?></dt>
		<dd><?php echo $boleto['Boleto']['demonstrativo2']; ?>&nbsp;</dd>
		<dt><?php __('Demonstrativo 3'); ?></dt>
		<dd><?php echo $boleto['Boleto']['demonstrativo3']; ?>&nbsp;</dd>
		<dt><?php __('Instruções 1'); ?></dt>
		<dd><?php echo $boleto['Boleto']['instrucoes1']; ?>&nbsp;</dd>
		<dt><?php __('Instruções 2'); ?></dt>
		<dd><?php echo $boleto['Boleto']['instrucoes2']; ?>&nbsp;</dd>
		<dt><?php __('Instruções 3'); ?></dt>
		<dd><?php echo $boleto['Boleto']['instrucoes3']; ?>&nbsp;</dd>
		<dt><?php __('Instruções 4'); ?></dt>
		<dd><?php echo $boleto['Boleto']['instrucoes4']; ?>&nbsp;</dd>
		<dt><?php __('Quantidade'); ?></dt>
		<dd><?php echo $boleto['Boleto']['quantidade']; ?>&nbsp;</dd>
		<dt><?php __('Valor Unitáprio'); ?></dt>
		<dd><?php echo $boleto['Boleto']['valor_unitario']; ?>&nbsp;</dd>
		<dt><?php __('Aceite'); ?></dt>
		<dd><?php echo $boleto['Boleto']['aceite']; ?>&nbsp;</dd>
		<dt><?php __('Espécie'); ?></dt>
		<dd><?php echo $boleto['Boleto']['especie']; ?>&nbsp;</dd>
		<dt><?php __('Espécie DOC'); ?></dt>
		<dd><?php echo $boleto['Boleto']['especie_doc']; ?>&nbsp;</dd>
		<dt><?php __('Seleção'); ?></dt>
		<dd><?php echo $boleto['Boleto']['selecao_id']; ?>&nbsp;</dd>
	</dl>
</div>
