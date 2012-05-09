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
<div class="span9">
	<div class="page-header">
		<h2>Inscrições</h2>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Nova Inscrição', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-check icon-white"></i> Homolagar Isentos', array('action' => 'homologar_isentos'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-condensed">
		<thead>
			<?php echo $this->Form->create('Inscricao', array('url' => array_merge(array('action' => 'index'), $this->params['pass']),
				'inputDefaults' => array('div' => false, 'class' => 'span3')
			));?>
			<tr>
				<th><?php echo $this->Form->input('nome');?></th>
				<th><?php echo $this->Form->input('processo_seletivo', array('options' => $processoSeletivos, 'empty' => 'Todos', 'type' => 'select', 'value' => isset($this->params['named']['processo_seletivo']) ? $this->params['named']['processo_seletivo'] : null));?></th>
				<th><?php echo $this->Form->input('limite', array('options' => Configure::read('Query.limit'), 'empty' => 'Ilimitado', 'value' => isset($this->params['named']['limite']) ? $this->params['named']['limite'] : null));?></th>
				<th><?php echo $this->Form->end('Filtrar');?></th>
			</tr>
		</thead>
	</table>

	<table class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('Inscrição', 'numero_inscricao');?></th>
				<th><?php echo $this->MyPaginator->sort('candidato_id');?></th>
				<th><?php echo $this->MyPaginator->sort('data');?></th>
				<th><?php echo $this->MyPaginator->sort('especial_prova');?></th>
				<th><?php echo $this->MyPaginator->sort('isento');?></th>
				<th>Processo Seletivo</th>
				<th>Notas</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($inscricoes as $inscricao):
			if (empty($inscricao['Selecao']['id'])) {
				continue;
			}
			?>
				<tr>
					<td><?php echo $inscricao['Inscricao']['numero_inscricao']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($inscricao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $inscricao['Candidato']['id'])); ?>
					</td>
					<td><?php echo $this->Formatacao->data($inscricao['Inscricao']['data']); ?>&nbsp;</td>
					<td><?php echo $this->Util->boolean($inscricao['Inscricao']['especial_prova']); ?>&nbsp;</td>
					<td><?php echo $this->Util->boolean($inscricao['Inscricao']['isento']); ?>&nbsp;</td>
					<td><?php echo $inscricao['Selecao']['ProcessoSeletivo']['descricao']; ?>&nbsp;</td>
					<td>
						<?php foreach ($inscricao['Nota'] as $nota):?>
							<div class="nota">
								<?php echo $nota['Prova']['descricao'];?>
								<?php echo $this->Form->input('nota_' .$nota['id'], array('label' => false, 'value' => $nota['valor'], 'class' => 'notas input-mini', 'div' => false));?>
							</div>

						<?php endforeach;?>
					</td>
					<td>
						<?php echo $this->Html->link(__('View', true), array('action' => 'view', $inscricao['Inscricao']['id']), array('class' => 'btn')); ?>
						<br />
						<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $inscricao['Inscricao']['id']), array('class' => 'btn')); ?>
						<br />
						<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $inscricao['Inscricao']['id']), array('class' => 'btn'), 'Você tem certeza?'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $this->element('pagination');?>
</div>
