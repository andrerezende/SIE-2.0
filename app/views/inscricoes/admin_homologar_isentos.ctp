<script type="text/javascript">
$(document).ready(function() {
	$("img.homologacao").hover(function() {
		img = $(this);
		img.css({
			"cursor": "pointer"
		});
	}, function() {
		img.css({
			"cursor": "auto"
		});
	});
	$("img.homologacao").click(function (e) {
		e.preventDefault();
		img = $(this);
		td = $(this).parent();
		valor = 0;
		if ($(this).attr("val") == 0) {
			valor = 1;
		};
		$.ajax({
			type: "POST",
			url: "<?php echo Router::url(array('admin' => true, 'controller' => 'inscricoes', 'action' => 'alterar_homologacao'));?>",
			dataType: "json",
			data: {
				"data[Inscricao][id]": img.attr("inscrito_id"),
				"data[Inscricao][homologado]": valor
			},
			beforeSend: function(xhr) {
				img.hide();
			},
			success: function(data, textStatus, jqXHR) {
				img.attr("val", data);
				if (data == 1) {
					img.attr("src", "<?php echo $this->Html->url(DS . 'theme' . DS . $this->theme . DS . 'img' . DS . 'icons' . DS . 'accept.png');?>");
				} else if (data == 0) {
					img.attr("src", "<?php echo $this->Html->url(DS . 'theme' . DS . $this->theme . DS . 'img' . DS . 'icons' . DS . 'exclamation.png');?>");
				}
				img.fadeIn();
			}
		});
	});
});
</script>
<div class="span9">
	<div class="page-header">
		<h2>Homologar Isentos</h2>
		<?php echo $this->Html->link('<i class="icon-th-list icon-white"></i> Listar Inscrições', array('action' => 'index'), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Nova Inscrição', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
	</div>

	<table class="table table-condensed">
		<thead>
			<?php echo $this->Form->create(null, array(
				'url' => array('controller' => 'inscricoes', 'action' => 'homologar_isentos'),
				'inputDefaults' => array('div' => false, 'class' => 'span3')
			));?>
			<tr>
				<th><?php echo $this->Form->input('limite', array('options' => Configure::read('Query.limit'), 'empty' => 'Ilimitado'));?></th>
				<th><?php echo $this->Form->input('homologado', array('options' => array(true => 'Sim', false => 'Não'), 'empty' => 'Todos'));?></th>
				<th><?php echo $this->Form->input('processo_seletivo_id', array('options' => $processoSeletivos, 'empty' => 'Todos'));?></th>
				<th><?php echo $this->Form->end('Filtrar');?></th>
			</tr>
		</thead>
	</table>

	<table class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->MyPaginator->sort('#', 'id');?></th>
				<th><?php echo $this->MyPaginator->sort('candidato_id');?></th>
				<th><?php echo $this->MyPaginator->sort('isento');?></th>
				<th>Processo Seletivo</th>
				<th><?php echo $this->MyPaginator->sort('homologado');?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($inscricoes as $inscricao):
				if (empty($inscricao['Selecao']['ProcessoSeletivo'])) {
					continue;
				}
			?>
				<tr>
					<td><?php echo $inscricao['Inscricao']['id']; ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($inscricao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $inscricao['Candidato']['id'])); ?>
					</td>
					<td><?php echo $this->Util->boolean($inscricao['Inscricao']['isento']); ?>&nbsp;</td>
					<td><?php echo $inscricao['Selecao']['ProcessoSeletivo']['descricao']; ?>&nbsp;</td>
					<td><?php echo $this->Util->imgFromBoolean($inscricao['Inscricao']['homologado'], array('inscrito_id' => $inscricao['Inscricao']['id'])); ?>&nbsp;</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $this->element('pagination');?>
</div>