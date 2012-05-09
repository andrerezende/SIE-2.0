<div class="span9">
	<div class="page-header">
		<h2>Critério de Desempate</h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $criterioDesempate['CriterioDesempate']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $criterioDesempate['CriterioDesempate']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>ID</dt>
		<dd><?php echo $criterioDesempate['CriterioDesempate']['id']; ?>&nbsp;</dd>
		<dt>Tipo</dt>
		<dd><?php
		$criterios = Configure::read('CriteriosDesempate');
		echo $criterios[$criterioDesempate['CriterioDesempate']['tipo']]; ?>&nbsp;</dd>
		<dt>Campo</dt>
		<dd><?php echo $criterioDesempate['CriterioDesempate']['campo']; ?>&nbsp;</dd>
		<dt>Processo Seletivo</dt>
		<dd><?php echo $this->Html->link($criterioDesempate['ProcessoSeletivo']['descricao'], array('controller' => 'processo_seletivos', 'action' => 'view', $criterioDesempate['ProcessoSeletivo']['id'])); ?>&nbsp;</dd>
	</dl>
</div>
