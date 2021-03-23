<?php
session_start();
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $_SESSION = [];
    session_destroy();
    header('Location: /');
}
$_SESSION['logged'] = $_SESSION['logged'] ?? false;

//BANCO DE DADOS
$user_db = 'luiz';
$senha_db = '1234';

$p_user = $_POST['user'] ?? NULL;
$p_senha - $_POST['senha'] ?? NULL;

if ($p_user == $user_db && $p_senha == $senha_db) {
    $_SESSION['user'] = $user_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = true;
}
