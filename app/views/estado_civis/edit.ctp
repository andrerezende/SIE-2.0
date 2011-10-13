<div class="estadoCivis form">
<?php echo $this->Form->create('EstadoCivil');?>
	<fieldset>
		<legend><?php __('Edit Estado Civil'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EstadoCivil.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EstadoCivil.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estado Civis', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
	</ul>
</div>