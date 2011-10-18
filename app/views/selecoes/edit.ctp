<div class="selecoes form">
<?php echo $this->Form->create('Selecao');?>
	<fieldset>
		<legend><?php __('Edit Selecao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('campus_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('processo_seletivo_id');
		echo $this->Form->input('ativo_web');
		echo $this->Form->input('vagas');
		echo $this->Form->input('encerrado');
		echo $this->Form->input('LocalProva');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Selecao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Selecao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Campus', true), array('controller' => 'campus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus', true), array('controller' => 'campus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('controller' => 'processo_seletivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('controller' => 'cotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cota', true), array('controller' => 'cotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Local Provas', true), array('controller' => 'local_provas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Local Prova', true), array('controller' => 'local_provas', 'action' => 'add')); ?> </li>
	</ul>
</div>