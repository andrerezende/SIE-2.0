<div class="processoSeletivos form">
<?php echo $this->Form->create('ProcessoSeletivo');?>
	<fieldset>
		<legend><?php __('Edit Processo Seletivo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('edital_id');
		echo $this->Form->input('data_inicio_inscricoes');
		echo $this->Form->input('data_fim_inscricoes');
		echo $this->Form->input('hora_inicio_inscricoes');
		echo $this->Form->input('hora_fim_inscricoes');
		echo $this->Form->input('ativo_web');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProcessoSeletivo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProcessoSeletivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Editais', true), array('controller' => 'editais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edital', true), array('controller' => 'editais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
	</ul>
</div>