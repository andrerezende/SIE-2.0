<div class="provas form">
<?php echo $this->Form->create('Prova');?>
	<fieldset>
		<legend><?php __('Edit Prova'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('peso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Prova.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Prova.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Provas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Notas', true), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota', true), array('controller' => 'notas', 'action' => 'add')); ?> </li>
	</ul>
</div>