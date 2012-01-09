<div class="criterioDesempates form">
<?php echo $this->Form->create('CriterioDesempate');?>
	<fieldset>
		<legend><?php __('Admin Add Criterio Desempate'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('processo_seletivo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Criterio Desempates', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('controller' => 'processo_seletivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add')); ?> </li>
	</ul>
</div>