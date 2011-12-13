<div class="selecoes view">
<h2><?php  __('Selecao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $selecao['Selecao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Campus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($selecao['Campus']['nome'], array('controller' => 'campus', 'action' => 'view', $selecao['Campus']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($selecao['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $selecao['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Processo Seletivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($selecao['ProcessoSeletivo']['id'], array('controller' => 'processo_seletivos', 'action' => 'view', $selecao['ProcessoSeletivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo Web'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $selecao['Selecao']['ativo_web']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vagas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $selecao['Selecao']['vagas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Encerrado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $selecao['Selecao']['encerrado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor da Inscrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $selecao['Selecao']['valor_inscricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php __('Related Cotas');?></h3>
	<?php if (!empty($selecao['Cota'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th><?php __('Quantidade'); ?></th>
		<th><?php __('Selecao Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($selecao['Cota'] as $cota):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cota['id'];?></td>
			<td><?php echo $cota['descricao'];?></td>
			<td><?php echo $cota['quantidade'];?></td>
			<td><?php echo $cota['selecao_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cotas', 'action' => 'view', $cota['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cotas', 'action' => 'edit', $cota['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cotas', 'action' => 'delete', $cota['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cota', true), array('controller' => 'cotas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Inscricoes');?></h3>
	<?php if (!empty($selecao['Inscricao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Candidato Id'); ?></th>
		<th><?php __('Selecao Id'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Especial Prova'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($selecao['Inscricao'] as $inscricao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inscricao['id'];?></td>
			<td><?php echo $inscricao['candidato_id'];?></td>
			<td><?php echo $inscricao['selecao_id'];?></td>
			<td><?php echo $inscricao['data'];?></td>
			<td><?php echo $inscricao['especial_prova'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'inscricoes', 'action' => 'view', $inscricao['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'inscricoes', 'action' => 'edit', $inscricao['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'inscricoes', 'action' => 'delete', $inscricao['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscricao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscricao', true), array('controller' => 'inscricoes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Local Provas');?></h3>
	<?php if (!empty($selecao['LocalProva'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($selecao['LocalProva'] as $localProva):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $localProva['id'];?></td>
			<td><?php echo $localProva['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'local_provas', 'action' => 'view', $localProva['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'local_provas', 'action' => 'edit', $localProva['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'local_provas', 'action' => 'delete', $localProva['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $localProva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Local Prova', true), array('controller' => 'local_provas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
