<div class="paises form">
<?php echo $this->Form->create('Pais');?>
	<fieldset>
		<legend><?php __('Add Pais'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('nacionalidade');
		echo $this->Form->input('sigla');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Paises', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Unidade Federativas', true), array('controller' => 'unidade_federativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Federativa', true), array('controller' => 'unidade_federativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
	</ul>
</div>