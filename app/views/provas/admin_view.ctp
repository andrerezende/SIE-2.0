<div class="provas view">
<h2><?php  __('Prova');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prova['Prova']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prova['Prova']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Peso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prova['Prova']['peso']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prova', true), array('action' => 'edit', $prova['Prova']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Prova', true), array('action' => 'delete', $prova['Prova']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $prova['Prova']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prova', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notas', true), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota', true), array('controller' => 'notas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Notas');?></h3>
	<?php if (!empty($prova['Nota'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th><?php __('Prova Id'); ?></th>
		<th><?php __('Inscricao Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($prova['Nota'] as $nota):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $nota['id'];?></td>
			<td><?php echo $nota['valor'];?></td>
			<td><?php echo $nota['prova_id'];?></td>
			<td><?php echo $nota['inscricao_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'notas', 'action' => 'view', $nota['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'notas', 'action' => 'edit', $nota['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'notas', 'action' => 'delete', $nota['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nota', true), array('controller' => 'notas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
