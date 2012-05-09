<div class="span9">
	<div class="page-header">
		<h2>Usuário</h2>
		<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
		<?php echo $this->Html->link('<i class="icon-trash icon-white"></i> Excluir', array('action' => 'delete', $usuario['Usuario']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Você tem certeza?'); ?>
	</div>

	<dl class="dl-horizontal">
		<dt>ID</dt>
		<dd><?php echo $usuario['Usuario']['id']; ?>&nbsp;</dd>
		<dt>Nome</dt>
		<dd><?php echo $usuario['Usuario']['nome']; ?>&nbsp;</dd>
		<dt>Email</dt>
		<dd><?php echo $usuario['Usuario']['email']; ?>&nbsp;</dd>
		<dt>Login</dt>
		<dd><?php echo $usuario['Usuario']['login']; ?>&nbsp;</dd>
		<dt>Grupo</dt>
		<dd><?php echo $this->Html->link($usuario['Grupo']['descricao'], array('controller' => 'grupos', 'action' => 'view', $usuario['Grupo']['id'])); ?>&nbsp;</dd>
	</dl>
</div>
