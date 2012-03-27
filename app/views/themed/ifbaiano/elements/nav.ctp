<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('Sistema de Inscrição Eletrônica 2.0', '/', array('class' => 'brand'));?>
			<div class="nav-collapse">
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<?php if (isset($userData) && !empty($userData)) :?>
							<li>
								<p class="navbar-text">
									Logado como <?php echo $this->Html->link($userData['Usuario']['login'], array('controller' => 'usuarios', 'action' => 'edit', $userData['Usuario']['id']));?>
								</p>
							</li>
							<li class="divider-vertical"></li>
							<li><?php echo $this->Html->link('Sair', array('admin' => false, 'controller' => 'usuarios', 'action' => 'logout'));?></li>
						<?php else:?>
							<li class="divider-vertical"></li>
							<li><?php echo $this->Html->link('Entrar', array('controller' => 'usuarios', 'action' => 'login'));?></li>
						<?php endif;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



<!--<div id="menu">
				<ul>
					<li><?php echo $this->Html->link('Home', '/login'); ?></li>
					<li>
						<?php echo $this->Html->link('Relatórios', '#'); ?>
						<span>
							<?php echo $this->Html->link('Classificação', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'classificacoes'));?>
							<?php echo $this->Html->link('Inscrições - Isentos Homologados', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'isentos_homologados'));?>
							<?php echo $this->Html->link('Inscrições - Homologados sem Isentos', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'homologados_sem_isentos'));?>
							<?php echo $this->Html->link('Inscrições - Relação Geral de Homologados', array('admin' => true, 'controller' => 'inscricoes', 'action' => 'homologados_geral'));?>
						</span>
					</li>
				</ul>
				<div id="account">
					<p>Olá <?php echo $userData['Usuario']['nome'];?></p>
					<p><?php echo $this->Html->link('Sair', array('admin' => false, 'controller' => 'usuarios', 'action' => 'logout'));?></p>
				</div>
			</div>-->