<?php echo $this->Html->script('jquery.price_format');?>
<script type="text/javascript">
	$(document).ready(function() {
		$("input[name^='data[nota']").priceFormat({
			prefix: '',
			thousandsSeparator: '',
			limit: 4
		});
		var focusables = $(":input.notas").not("[type='image']").not("[type='submit']");
		$(":input").not("[type='image']").not("[type='submit']").bind("keydown", function(e) {
			if (e.keyCode == 13 || e.keyCode == 9) {
				e.preventDefault();
				var postData = {
					"data[Nota][id]": $(this).attr("id").substr(5),
					"data[Nota][valor]": $(this).val()
				};
				var inputAtual = $(this);
				$.ajax({
					type: "POST",
					url: "/notas/ajax_update_nota",
					data: postData,
					success: function(data) {
						$(inputAtual).next("img").remove();
						if (data == "success") {
							$(inputAtual).parent().append('<?php echo $this->Html->image('icons/accept.png');?>');
						} else {
							$(inputAtual).parent().append('<?php echo $this->Html->image('icons/exclamation.png');?>');
						}
					}
				});
				var current = focusables.index(this);
				next = focusables.eq(current + 1).length ? focusables.eq(current + 1) : focusables.eq(0);
				next.focus();
			}
		});
	});
</script>
<div class="inscricoes index">
	<h4><?php echo $this->Html->link(__('Nova Inscrição', true), array('action' => 'add')); ?> |
	<?php echo $this->Html->link(__('Homolagar Isentos', true), array('action' => 'homologar_isentos')); ?></h4>
	<h2><?php __('Inscrições');?></h2>
	<table cellpadding="0" cellspacing="0">
		<?php echo $this->Form->create('Inscricao', array('url' => array_merge(array('action' => 'index'), $this->params['pass']),
			'inputDefaults' => array('div' => false, 'class' => false)
		));?>
		<tr>
			<th><?php echo $this->Form->input('nome');?></th>
			<th><?php echo $this->Form->input('processo_seletivo', array('options' => $processoSeletivos, 'empty' => 'Todos', 'type' => 'select', 'value' => isset($this->params['named']['processo_seletivo']) ? $this->params['named']['processo_seletivo'] : null));?></th>
			<th><?php echo $this->Form->input('limite', array('options' => Configure::read('Query.limit'), 'empty' => 'Ilimitado', 'value' => isset($this->params['named']['limite']) ? $this->params['named']['limite'] : null));?></th>
			<th><?php echo $this->Form->end('Filtrar');?></th>
		</tr>
	</table>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('candidato_id');?></th>
		<th><?php echo $this->Paginator->sort('data');?></th>
		<th><?php echo $this->Paginator->sort('especial_prova');?></th>
		<th><?php echo $this->Paginator->sort('isento');?></th>
		<th class="actions">Notas</th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($inscricoes as $inscricao):
		if (empty($inscricao['Selecao']['id'])) {
			continue;
		}
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $inscricao['Inscricao']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscricao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $inscricao['Candidato']['id'])); ?>
		</td>
		<td><?php echo $this->Formatacao->data($inscricao['Inscricao']['data']); ?>&nbsp;</td>
		<td><?php echo $this->Util->boolean($inscricao['Inscricao']['especial_prova']); ?>&nbsp;</td>
		<td><?php echo $this->Util->boolean($inscricao['Inscricao']['isento']); ?>&nbsp;</td>
		<td class="actions">
		<?php foreach ($inscricao['Nota'] as $nota):?>
		
			<div class="nota">
				<?php echo $nota['Prova']['descricao'];?>
				<?php echo $this->Form->input('nota_' .$nota['id'], array('label' => false, 'value' => $nota['valor'], 'class' => 'notas', 'div' => false));?>
			</div>
		
		<?php endforeach;?>
			</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $inscricao['Inscricao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscricao['Inscricao']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php if ($this->Paginator->numbers()):?>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
		<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
<?php endif;?>
</div>