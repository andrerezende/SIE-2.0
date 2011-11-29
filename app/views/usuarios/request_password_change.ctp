<h2><?php echo 'Esqueceu sua senha?' ?></h2>
<p>
<?php echo 'Por favor digite o email que você usou para o registo e você receberá um email com mais instruções.' ?>
</p>
<?php
echo $this->Form->create('Usuario', array(
	'url' => array(
		'admin' => false,
		'action' => 'recuperar_senha'
	)
));
echo $this->Form->input('email', array('label' => 'Seu email'));
echo $this->Form->submit('Enviar');
echo $this->Form->end();
?>