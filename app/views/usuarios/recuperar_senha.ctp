<h2><?php echo 'Reset your password'; ?></h2>

<?php
echo $this->Form->create('Usuario', array(
	'url' => array(
		'action' => 'recuperar_senha',
		$token
	)
));
echo $this->Form->input('nova_senha', array('label' => 'Nova Senha', 'type' => 'password'));
echo $this->Form->input('confirmar_senha', array('label' => 'Confirme', 'type' => 'password'));
echo $this->Form->submit('Enviar');
echo $this->Form->end();
?>