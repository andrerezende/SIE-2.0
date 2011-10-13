<div class="campus form">
<?php echo $this->Form->create('Campus');?>
	<fieldset>
		<legend><?php __('Edit Campus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Campus.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Campus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campus', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
	</ul>
</div>