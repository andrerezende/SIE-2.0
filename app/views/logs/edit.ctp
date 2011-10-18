<div class="logs form">
<?php echo $this->Form->create('Log');?>
	<fieldset>
		<legend><?php __('Edit Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tabela');
		echo $this->Form->input('campo');
		echo $this->Form->input('data');
		echo $this->Form->input('valor_anterior');
		echo $this->Form->input('valor_atual');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Log.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Log.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Logs', true), array('action' => 'index'));?></li>
	</ul>
</div>