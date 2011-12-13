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
				'publico',
			), null, array('media' => 'screen'
		));

		echo $this->Html->script(array(
			'jquery'
		));

		echo $scripts_for_layout;
		?>
		<script type="text/javascript">
			/*
			 *  jquery.currentpage.js
			 *  Adds a class to current page for navigation links.
			 *  Chad Jolly http://www.jollycomputers.com/
			 */
			jQuery.fn.currentPage = function(){

				/* Default Settings */
				var settings = {
					loc : location.pathname,
					sel : '',
					currentClass : 'current_page_item'
				}

				/* break location down to the controller, no trailing slash */
				if (settings.loc != '/') {
					controller = settings.loc.split('/',2);
					settings.loc = '/'+ controller[1];
					settings.sel = '^';
				}

				var selector = 'a[href'+settings.sel+'="'+settings.loc+'"]';

				/* attach settings.currentClass to appropriate link */
				return this.each(function(){
					jQuery(this).find(selector).parent().addClass(settings.currentClass);
				});
			};

			$(document).ready(function() {
				$('#menu').currentPage();
			})
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1><?php echo $this->Html->image('topo-ifbaiano.png');?></h1>
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
									<ul>
										<li><?php echo $this->Html->link('Página Inicial', '/'); ?></li>
										<li><?php echo $this->Html->link('Página do Concurso', '#'); ?></li>
										<?php if (isset($userData) && !empty($userData)):?>
											<li><?php echo $this->Html->link('Alterar / Imprimir Inscrição', array('candidato' => true, 'controller' => 'candidatos', 'action' => 'editar', $userData['Usuario']['candidato_id'])); ?></li>
											<li><?php echo $this->Html->link('Processos Seletivos', array('candidato' => true, 'controller' => 'processo_seletivos', 'action' => 'listar')); ?></li>
											<li><?php echo $this->Html->link('2ª Via Boleto', array('candidato' => true, 'controller' => 'candidatos', 'action' => 'candidato_gerar_boleto')); ?></li>
											<li><?php echo $this->Html->link('Sair', array('candidato' => false, 'controller' => 'usuarios', 'action' => 'logout')); ?></li>
										<?php else: ?>
											<li><?php echo $this->Html->link('Nova Inscrição', array('candidato' => false, 'prefix' => false, 'controller' => 'candidatos', 'action' => 'cadastro')); ?></li>
											<li><?php echo $this->Html->link('Alterar / Imprimir Inscrição', array('candidato' => true, 'controller' => 'candidatos', 'action' => 'editar')); ?></li>
											<li><?php echo $this->Html->link('Recuperar Senha', array('controller' => 'usuarios', 'action' => 'recuperar_senha')); ?></li>
										<?php endif;?>
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