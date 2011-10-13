<div class="editais form">
<?php echo $this->Form->create('Edital');?>
	<fieldset>
		<legend><?php __('Edit Edital'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('data');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Edital.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Edital.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Editais', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('controller' => 'processo_seletivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add')); ?> </li>
	</ul>
</div>