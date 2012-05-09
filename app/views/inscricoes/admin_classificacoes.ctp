<style type="text/css">
	ul.lista-cursos {
		list-style: none;
		margin: 0;
		padding: 0;
	}
	ul.lista-cursos li {
		margin:0 0 0.5em 0;
		list-style-type: none;
		white-space: nowrap;
		padding: 0;
	}
	ul.lista-cursos li:nth-child(even) {
		background: #f5f5f5;
	}
	ul.lista-cursos li:hover {
		background: #FFFACD !important;
		cursor: pointer;
	}
	ul.lista-cursos li a {
		display: none;
	}
</style>
<script type="text/javascript">
	$(document).ready(function () {
		$(".lista-cursos li").click(function () {
			$(location).attr("href", $("a", this).attr("href"));
		});
	});
</script>
<h2 class="title">Classificações por Curso</h2>
<div style="clear: both;">&nbsp;</div>
<div class="entry">
	<ul class="lista-cursos">
	<?php foreach ($selecoes as $selecao):?>
		<li><b><?php echo $selecao['ProcessoSeletivo']['descricao'];?></b> / <b><?php echo $selecao['Campus']['nome'];?></b> - <?php echo $selecao['Curso']['descricao'];?>
		<?php echo $this->Html->link('Lista', array(
				'controller' => 'inscricoes',
				'action' => 'lista_por_notas',
				$selecao['Selecao']['id'],
				$selecao['Selecao']['processo_seletivo_id']
			));?>
		</li>
	<?php endforeach; ?>
	</ul>
</div>