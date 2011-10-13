<div class="listas form">
<?php echo $this->Form->create('Lista');?>
	<fieldset>
		<legend><?php __('Add Lista'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('Classificacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Listas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('controller' => 'classificacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('controller' => 'classificacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>