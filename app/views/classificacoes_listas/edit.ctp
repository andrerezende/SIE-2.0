<div class="classificacoesListas form">
<?php echo $this->Form->create('ClassificacoesLista');?>
	<fieldset>
		<legend><?php __('Edit Classificacoes Lista'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('classificacao_id');
		echo $this->Form->input('lista_id');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ClassificacoesLista.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ClassificacoesLista.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Classificacoes Listas', true), array('action' => 'index'));?></li>
	</ul>
</div>