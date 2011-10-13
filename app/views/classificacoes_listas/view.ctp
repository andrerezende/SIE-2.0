<div class="classificacoesListas view">
<h2><?php  __('Classificacoes Lista');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classificacoesLista['ClassificacoesLista']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Classificacao Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classificacoesLista['ClassificacoesLista']['classificacao_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lista Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classificacoesLista['ClassificacoesLista']['lista_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classificacoesLista['ClassificacoesLista']['data']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Classificacoes Lista', true), array('action' => 'edit', $classificacoesLista['ClassificacoesLista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Classificacoes Lista', true), array('action' => 'delete', $classificacoesLista['ClassificacoesLista']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classificacoesLista['ClassificacoesLista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Classificacoes Listas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacoes Lista', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
