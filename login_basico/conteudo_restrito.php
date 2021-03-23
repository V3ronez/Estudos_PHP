<?php
$logged = $_SESSION['logged'] ?? NULL;

if (!$logged) die('Acesso negado');
?>
<p>Conteudo restrito</p>
<p><?php echo "Olá {$_SESSION['user']}."; ?></p>