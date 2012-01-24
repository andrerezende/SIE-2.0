<script type="text/javascript">
$(document).ready(function() {
	$("img.homologacao").click(function (e) {
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
					img.attr("src", "<?php echo $this->Html->url(DS . 'theme' . DS . $this->theme . DS . 'img' . DS . 'icons' . DS . 'onebit_34.png');?>");
				} else if (data == 0) {
					img.attr("src", "<?php echo $this->Html->url(DS . 'theme' . DS . $this->theme . DS . 'img' . DS . 'icons' . DS . 'onebit_33.png');?>");
				}
				img.fadeIn();
			}
		});
	});
});
</script>
<div class="inscricoes index">
	<h2><?php __('Isentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php echo $this->Form->create(null, array(
		'url' => array('controller' => 'inscricoes', 'action' => 'homologar_isentos'),
		'inputDefaults' => array('div' => false, 'class' => false)
	));?>
	<tr>
		<th><?php echo $this->Form->input('limite', array('options' => array(10 => 10, 30 => 30, 50 => 50, 100 => 100, 200 => 200), 'empty' => 'Ilimitado'));?></th>
		<th><?php echo $this->Form->input('homologado', array('options' => array(true => 'Sim', false => 'Não'), 'empty' => 'Todos'));?></th>
		<th><?php echo $this->Form->input('processo_seletivo_id', array('options' => $processoSeletivos, 'empty' => 'Todos'));?></th>
		<th><?php echo $this->Form->end('Filtrar');?></th>
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('candidato_id');?></th>
		<th><?php echo $this->Paginator->sort('isento');?></th>
		<th>Processo Seletivo</th>
		<th><?php echo $this->Paginator->sort('homologado');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($inscricoes as $inscricao):
		if (empty($inscricao['Selecao']['ProcessoSeletivo'])) {
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
		<td><?php echo $inscricao['Inscricao']['isento']; ?>&nbsp;</td>
		<td><?php echo $inscricao['Selecao']['ProcessoSeletivo']['descricao']; ?>&nbsp;</td>
		<td><?php echo $this->Util->imgFromBoolean($inscricao['Inscricao']['homologado'], array('inscrito_id' => $inscricao['Inscricao']['id'])); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

<?php if ($this->Paginator->numbers()):?>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
		<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
<?php endif;?>
</div>