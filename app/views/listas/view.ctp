<div class="listas view">
<h2><?php  __('Lista');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lista['Lista']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lista['Lista']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lista', true), array('action' => 'edit', $lista['Lista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Lista', true), array('action' => 'delete', $lista['Lista']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lista['Lista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Listas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lista', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('controller' => 'classificacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('controller' => 'classificacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Classificacoes');?></h3>
	<?php if (!empty($lista['Classificacao'])):?>
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
		foreach ($lista['Classificacao'] as $classificacao):
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
