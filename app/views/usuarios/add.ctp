<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('login');
		echo $this->Form->input('senha', array('type' => 'password'));
		echo $this->Form->input('grupo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>