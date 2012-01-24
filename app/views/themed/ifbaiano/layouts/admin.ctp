<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Instituto Federal Baiano</title>
		<?php
		echo $this->Html->css(
			array(
				'grid',
				'admin',
			), null, array('media' => 'screen'
		));

		echo $this->Html->script(array(
			'jquery'
		));

		echo $scripts_for_layout;
		?>
		<script type="text/javascript">
			$(document).ready(function() {
				$("div#menu ul li").hover(function() {
					$(this).addClass("current_page_item");
					$(this).find("span").show();
				}, function() {
					$(this).removeClass("current_page_item");
					$(this).find("span").hide();
				});
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="menu">
				<ul>
					<li><?php echo $this->Html->link('Home', '/login'); ?></li>
					<li>
						<?php echo $this->Html->link('Relatórios', '#'); ?>
						<span>
							<?php echo $this->Html->link('Lista por Notas', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'lista_por_notas'));?>
							<?php echo $this->Html->link('Inscrições - Isentos Homologados', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'lista_por_notas'));?>
							<?php echo $this->Html->link('Inscrições - Homologados sem Isentos', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'lista_por_notas'));?>
							<?php echo $this->Html->link('Inscrições - Relação Geral de Homologados', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'lista_por_notas'));?>
						</span>
					</li>
				</ul>
				<div id="account">
					<p>Olá <?php echo $userData['Usuario']['nome'];?></p>
					<p><?php echo $this->Html->link('Sair', array('admin' => false, 'controller' => 'usuarios', 'action' => 'logout'));?></p>
				</div>
			</div>
			<!-- end #menu -->
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<?php echo $this->Session->flash();?>
							<div class="post">
								<?php echo $content_for_layout; ?>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<ul>
								<li>
									<h2>Menu</h2>
									<ul>

										<li><?php echo $this->Html->link('Cursos', array('controller' => 'cursos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Locais de Prova', array('controller' => 'local_provas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Campi', array('controller' => 'campus', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Municípios', array('controller' => 'municipios', 'action' => 'index')); ?></li>
<!--									<li><?php //echo $this->Html->link('Unidades Federativas', array('controller' => 'unidade_federativas', 'action' => 'index')); ?></li>-->
<!--									<li><?php //echo $this->Html->link('Países', array('controller' => 'paises', 'action' => 'index')); ?></li>-->
									</ul>
									<ul>
										<li><?php echo $this->Html->link('Estados Civis', array('controller' => 'estado_civis', 'action' => 'index')); ?></li>
<!--									<li><?php //echo $this->Html->link('Sexos', array('controller' => 'sexos', 'action' => 'index')); ?></li>-->
										<li><?php echo $this->Html->link('Necessidades Especiais', array('controller' => 'necessidade_especiais', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Cotas', array('controller' => 'cotas', 'action' => 'index')); ?></li>

									</ul>
									<ul>
										<li><?php echo $this->Html->link('Cassificações', array('controller' => 'classificacoes', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Classificações / Listas', array('controller' => 'classificacoes_listas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Listas', array('controller' => 'listas', 'action' => 'index')); ?></li>
									</ul>
									<ul>
										<li><?php echo $this->Html->link('Pagamentos', array('controller' => 'pagamentos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Critérios de Desempate', array('controller' => 'criterio_desempates', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Candidatos', array('controller' => 'candidatos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Notas', array('controller' => 'notas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Inscrições', array('controller' => 'inscricoes', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Processos Seletivos', array('controller' => 'processo_seletivos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Boletos', array('controller' => 'boletos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Provas', array('controller' => 'provas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Editais', array('controller' => 'editais', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Seleções', array('controller' => 'selecoes', 'action' => 'index')); ?></li>
									</ul>
									<ul>
										<li><?php echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Grupos', array('controller' => 'grupos', 'action' => 'index')); ?></li>
<!--									<li><?php //echo $this->Html->link('Logs', array('controller' => 'logs', 'action' => 'index')); ?></li>-->
									</ul>
								</li>
							</ul>
						</div>
						<!-- end #sidebar -->
						<div style="clear: both;">&nbsp;</div>
					</div>
				</div>
			</div>
			<!-- end #page -->
		</div>
	</body>
</html>