<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Instituto Federal Baiano</title>
		<?php
		echo $this->Html->css('style', null, array('media' => 'screen'));

		echo $this->Html->script(array(
			'jquery'
		));

		echo $scripts_for_layout;
		?>
	</head>
	<body>
		<div id="wrapper">
			<div id="menu">
				<ul>
					<li class="current_page_item"><?php echo $this->Html->link("Home", '/'); ?></li>
				</ul>
			</div>
			<!-- end #menu -->
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
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
										<li><?php echo $this->Html->link('Campus', array('controller' => 'campus', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Candidatos', array('controller' => 'candidatos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Cassificações', array('controller' => 'classificacoes', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Classificações / Listas', array('controller' => 'classificacoes_listas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Cotas', array('controller' => 'cotas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Cursos', array('controller' => 'cursos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Editais', array('controller' => 'editais', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Estados Civis', array('controller' => 'estado_civis', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Grupos', array('controller' => 'grupos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Inscrições', array('controller' => 'inscricoes', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Listas', array('controller' => 'listas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Locais de Prova', array('controller' => 'local_provas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Logs', array('controller' => 'logs', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Municípios', array('controller' => 'municipios', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Necessidades Especiais', array('controller' => 'necessidade_especiais', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Notas', array('controller' => 'notas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Pagamentos', array('controller' => 'pagamentos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Países', array('controller' => 'paises', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Processos Seletivos', array('controller' => 'Processo Seletivos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Provas', array('controller' => 'provas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Seleções', array('controller' => 'selecoes', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Sexos', array('controller' => 'sexos', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Unidades Federativas', array('controller' => 'unidade_federativas', 'action' => 'index')); ?></li>
										<li><?php echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'index')); ?></li>
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
		<div id="footer">
			<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
		</div>
		<!-- end #footer -->
	</body>
</html>