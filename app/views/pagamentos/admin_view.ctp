<div class="pagamentos view">
<h2><?php  __('Pagamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inscricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pagamento['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $pagamento['Inscricao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Arqretorno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['arqretorno']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Pagamento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['data_pagamento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Retorno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['data_retorno']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Importacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagamento['Pagamento']['data_importacao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pagamento', true), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pagamento', true), array('action' => 'delete', $pagamento['Pagamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagamento['Pagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagamentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagamento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
