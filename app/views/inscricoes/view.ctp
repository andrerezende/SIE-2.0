<div class="inscricoes view">
<h2><?php  __('Inscricao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscricao['Inscricao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Candidato'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inscricao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $inscricao['Candidato']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Selecao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inscricao['Selecao']['id'], array('controller' => 'selecoes', 'action' => 'view', $inscricao['Selecao']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscricao['Inscricao']['data']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Especial Prova'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscricao['Inscricao']['especial_prova']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscricao', true), array('action' => 'edit', $inscricao['Inscricao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Inscricao', true), array('action' => 'delete', $inscricao['Inscricao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscricao['Inscricao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidatos', true), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato', true), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notas', true), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota', true), array('controller' => 'notas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classificacoes', true), array('controller' => 'classificacoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classificacao', true), array('controller' => 'classificacoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Notas');?></h3>
	<?php if (!empty($inscricao['Nota'])):?>
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
		foreach ($inscricao['Nota'] as $nota):
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
<div class="related">
	<h3><?php __('Related Classificacoes');?></h3>
	<?php if (!empty($inscricao['Classificacao'])):?>
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
		foreach ($inscricao['Classificacao'] as $classificacao):
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
