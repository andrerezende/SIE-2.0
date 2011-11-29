<?php
echo 'Uma solicitação para redefinir sua senha foi enviada. Para alterar sua senha clique no link abaixo.';
echo "\n";
echo Router::url(array('admin' => false, 'controller' => 'usuarios', 'action' => 'recuperar_senha', $token), true);