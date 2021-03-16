<?php
//Escopo global
$nome = "Henrique";
$a = 1;
$b = 3;
$c = 7;

function exibeNome()
{
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";
///////////////////////

function exibeCidade()
{
    //Escopo local
    global $cidade;
    $cidade  = "Gyn";
}
echo exibeCidade();
echo $cidade;
echo "<hr>";
///////////////////////

function soma()
{
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();
