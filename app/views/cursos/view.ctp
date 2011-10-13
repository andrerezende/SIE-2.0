<div class="cursos view">
<h2><?php  __('Curso');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curso['Curso']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curso['Curso']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sigla'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curso['Curso']['sigla']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso', true), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Curso', true), array('action' => 'delete', $curso['Curso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Selecoes');?></h3>
	<?php if (!empty($curso['Selecao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Campus Id'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<th><?php __('Processo Seletivo Id'); ?></th>
		<th><?php __('Ativo Web'); ?></th>
		<th><?php __('Vagas'); ?></th>
		<th><?php __('Encerrado'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Selecao'] as $selecao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $selecao['id'];?></td>
			<td><?php echo $selecao['campus_id'];?></td>
			<td><?php echo $selecao['curso_id'];?></td>
			<td><?php echo $selecao['processo_seletivo_id'];?></td>
			<td><?php echo $selecao['ativo_web'];?></td>
			<td><?php echo $selecao['vagas'];?></td>
			<td><?php echo $selecao['encerrado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'selecoes', 'action' => 'view', $selecao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'selecoes', 'action' => 'edit', $selecao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'selecoes', 'action' => 'delete', $selecao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $selecao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
