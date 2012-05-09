<div class="span9">
	<div class="page-header">
		<h2>Pagamento: <?php echo $pagamento['Pagamento']['arqretorno']; ?></h2>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $pagamento['Pagamento']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>Inscrição</dt>
		<dd><?php echo $this->Html->link($pagamento['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $pagamento['Inscricao']['id'])); ?>&nbsp;</dd>
		<dt>Arquivo de Retorno</dt>
		<dd>?<php echo $pagamento['Pagamento']['arqretorno']; ?>&nbsp;</dd>
		<dt>Data do Pagamento</dt>
		<dd><?php echo $this->Formatacao->data($pagamento['Pagamento']['data_pagamento']); ?>&nbsp;</dd>
		<dt>Data de Retorno</dt>
		<dd><?php echo $this->Formatacao->data($pagamento['Pagamento']['data_retorno']); ?>&nbsp;</dd>
		<dt>Data de Importacao</dt>
		<dd><?php echo $this->Formatacao->data($pagamento['Pagamento']['data_importacao']); ?>&nbsp;</dd>
	</dl>
</div>
