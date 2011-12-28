<div class="editais view">
<h2><?php  __('Edital');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $edital['Edital']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $edital['Edital']['numero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $edital['Edital']['data']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $edital['Edital']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Edital', true), array('action' => 'edit', $edital['Edital']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Edital', true), array('action' => 'delete', $edital['Edital']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $edital['Edital']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Editais', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edital', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processo Seletivos', true), array('controller' => 'processo_seletivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Processo Seletivos');?></h3>
	<?php if (!empty($edital['ProcessoSeletivo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Edital Id'); ?></th>
		<th><?php __('Data Inicio Inscricoes'); ?></th>
		<th><?php __('Data Fim Inscricoes'); ?></th>
		<th><?php __('Hora Inicio Inscricoes'); ?></th>
		<th><?php __('Hora Fim Inscricoes'); ?></th>
		<th><?php __('Ativo Web'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($edital['ProcessoSeletivo'] as $processoSeletivo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $processoSeletivo['id'];?></td>
			<td><?php echo $processoSeletivo['edital_id'];?></td>
			<td><?php echo $processoSeletivo['data_inicio_inscricoes'];?></td>
			<td><?php echo $processoSeletivo['data_fim_inscricoes'];?></td>
			<td><?php echo $processoSeletivo['hora_inicio_inscricoes'];?></td>
			<td><?php echo $processoSeletivo['hora_fim_inscricoes'];?></td>
			<td><?php echo $processoSeletivo['ativo_web'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'processo_seletivos', 'action' => 'view', $processoSeletivo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'processo_seletivos', 'action' => 'edit', $processoSeletivo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'processo_seletivos', 'action' => 'delete', $processoSeletivo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $processoSeletivo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Processo Seletivo', true), array('controller' => 'processo_seletivos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
