<div class="necessidadeEspeciais form">
<?php echo $this->Form->create('NecessidadeEspecial');?>
	<fieldset>
		<legend><?php __('Edit Necessidade Especial'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('NecessidadeEspecial.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('NecessidadeEspecial.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Necessidade Especiais', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
	</ul>
</div>