<div class="notas view">
<h2><?php  __('Nota');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['valor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prova'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nota['Prova']['id'], array('controller' => 'provas', 'action' => 'view', $nota['Prova']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inscricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nota['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $nota['Inscricao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nota', true), array('action' => 'edit', $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Nota', true), array('action' => 'delete', $nota['Nota']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provas', true), array('controller' => 'provas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prova', true), array('controller' => 'provas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
