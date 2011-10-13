<div class="processoSeletivos view">
<h2><?php  __('Processo Seletivo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $processoSeletivo['ProcessoSeletivo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edital'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($processoSeletivo['Edital']['id'], array('controller' => 'editais', 'action' => 'view', $processoSeletivo['Edital']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Inicio Inscricoes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $processoSeletivo['ProcessoSeletivo']['data_inicio_inscricoes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Fim Inscricoes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $processoSeletivo['ProcessoSeletivo']['data_fim_inscricoes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hora Inicio Inscricoes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $processoSeletivo['ProcessoSeletivo']['hora_inicio_inscricoes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hora Fim Inscricoes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $processoSeletivo['ProcessoSeletivo']['hora_fim_inscricoes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo Web'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $processoSeletivo['ProcessoSeletivo']['ativo_web']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Processo Seletivo', true), array('action' => 'edit', $processoSeletivo['ProcessoSeletivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Processo Seletivo', true), array('action' => 'delete', $processoSeletivo['ProcessoSeletivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $processoSeletivo['ProcessoSeletivo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Editais', true), array('controller' => 'editais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edital', true), array('controller' => 'editais', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selecoes', true), array('controller' => 'selecoes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selecao', true), array('controller' => 'selecoes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Selecoes');?></h3>
	<?php if (!empty($processoSeletivo['Selecao'])):?>
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
		foreach ($processoSeletivo['Selecao'] as $selecao):
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
