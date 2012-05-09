<div class="classificacoes view">
<h2><?php  __('Classificacao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classificacao['Classificacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ordem'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classificacao['Classificacao']['ordem']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inscricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($classificacao['Inscricao']['id'], array('controller' => 'inscricoes', 'action' => 'view', $classificacao['Inscricao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cota'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($classificacao['Cota']['id'], array('controller' => 'cotas', 'action' => 'view', $classificacao['Cota']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Classificacao', true), array('action' => 'edit', $classificacao['Classificacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Classificacao', true), array('action' => 'delete', $classificacao['Classificacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classificacao['Classificacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('controller' => 'inscricoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('controller' => 'cotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cota', true), array('controller' => 'cotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listas', true), array('controller' => 'listas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lista', true), array('controller' => 'listas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Listas');?></h3>
	<?php if (!empty($classificacao['Lista'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($classificacao['Lista'] as $lista):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lista['id'];?></td>
			<td><?php echo $lista['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'listas', 'action' => 'view', $lista['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'listas', 'action' => 'edit', $lista['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'listas', 'action' => 'delete', $lista['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lista['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lista', true), array('controller' => 'listas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
