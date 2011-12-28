<div class="cotas view">
<h2><?php  __('Cota');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cota['Cota']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cota['Cota']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cota['Cota']['quantidade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Selecao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cota['Selecao']['id'], array('controller' => 'selecoes', 'action' => 'view', $cota['Selecao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cota', true), array('action' => 'edit', $cota['Cota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cota', true), array('action' => 'delete', $cota['Cota']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cota['Cota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cotas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cota', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('controller' => 'classificacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('controller' => 'classificacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Classificacoes');?></h3>
	<?php if (!empty($cota['Classificacao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ordem'); ?></th>
		<th><?php __('Inscricao Id'); ?></th>
		<th><?php __('Cota Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cota['Classificacao'] as $classificacao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $classificacao['id'];?></td>
			<td><?php echo $classificacao['ordem'];?></td>
			<td><?php echo $classificacao['inscricao_id'];?></td>
			<td><?php echo $classificacao['cota_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'classificacoes', 'action' => 'view', $classificacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'classificacoes', 'action' => 'edit', $classificacao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'classificacoes', 'action' => 'delete', $classificacao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classificacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Classificacao', true), array('controller' => 'classificacoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
