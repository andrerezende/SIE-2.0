<div class="classificacoes form">
<?php echo $this->Form->create('Classificacao');?>
	<fieldset>
		<legend><?php __('Add Classificacao'); ?></legend>
	<?php
		echo $this->Form->input('ordem');
		echo $this->Form->input('inscricao_id');
		echo $this->Form->input('cota_id');
		echo $this->Form->input('Lista');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('controller' => 'cotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cota', true), array('controller' => 'cotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listas', true), array('controller' => 'listas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lista', true), array('controller' => 'listas', 'action' => 'add')); ?> </li>
	</ul>
</div>