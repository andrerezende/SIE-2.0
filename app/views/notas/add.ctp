<div class="notas form">
<?php echo $this->Form->create('Nota');?>
	<fieldset>
		<legend><?php __('Add Nota'); ?></legend>
	<?php
		echo $this->Form->input('valor');
		echo $this->Form->input('prova_id');
		echo $this->Form->input('inscricao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provas', true), array('controller' => 'provas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prova', true), array('controller' => 'provas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
	</ul>
</div>