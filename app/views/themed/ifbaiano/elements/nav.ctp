<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('Sistema de Inscrição Eletrônica 2.0', '/login', array('class' => 'brand'));?>
			<div class="nav-collapse">
				<div class="nav-collapse">
					<ul class="nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><?php echo $this->Html->link('Listar', array('controller' => 'usuarios', 'action' => 'index')); ?></li>
								<li><?php echo $this->Html->link('Adicionar', array('controller' => 'usuarios', 'action' => 'add')); ?></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Grupos <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><?php echo $this->Html->link('Listar', array('controller' => 'grupos', 'action' => 'index')); ?></li>
								<li><?php echo $this->Html->link('Adicionar', array('controller' => 'grupos', 'action' => 'add')); ?></li>
							</ul>
						</li>
					</ul>
					<ul class="nav pull-right">
						<?php if (isset($userData) && !empty($userData)) :?>
							<li>
								<p class="navbar-text">
									<?php echo $this->Html->link('<i class="icon-user icon-white"></i> ' . $userData['Usuario']['nome'], array('controller' => 'usuarios', 'action' => 'edit', $userData['Usuario']['id']), array('escape' => false));?>
								</p>
							</li>
							<li class="divider-vertical"></li>
							<li><?php echo $this->Html->link('Sair <i class="icon-off icon-white"></i>', array('admin' => false, 'controller' => 'usuarios', 'action' => 'logout'), array('escape' => false));?></li>
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
