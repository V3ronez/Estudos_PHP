<?php
// session_start();
include_once 'dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;
if (!$logged) die('Acesso negado');
?>
<?php
include_once 'menu.php';
?>
<p>conteudo restrito da pag 2.</p>