<div class="cotas form">
<?php echo $this->Form->create('Cota');?>
	<fieldset>
		<legend><?php __('Edit Cota'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('quantidade');
		echo $this->Form->input('selecao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Cota.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Cota.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('controller' => 'classificacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('controller' => 'classificacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>