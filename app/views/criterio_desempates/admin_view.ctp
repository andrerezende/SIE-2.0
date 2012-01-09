<div class="criterioDesempates view">
<h2><?php  __('Criterio Desempate');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $criterioDesempate['CriterioDesempate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $criterioDesempate['CriterioDesempate']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Processo Seletivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($criterioDesempate['ProcessoSeletivo']['descricao'], array('controller' => 'processo_seletivos', 'action' => 'view', $criterioDesempate['ProcessoSeletivo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criterio Desempate', true), array('action' => 'edit', $criterioDesempate['CriterioDesempate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Criterio Desempate', true), array('action' => 'delete', $criterioDesempate['CriterioDesempate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $criterioDesempate['CriterioDesempate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterio Desempates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterio Desempate', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('controller' => 'processo_seletivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
