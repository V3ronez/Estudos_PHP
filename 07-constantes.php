<?php
//Constantes
define("NOME", "Henrique");
define("IDADE", 45);
define("ALTURA", 1.98);
define("CASADO", true);

define("TIMES", ['vasco', 'SP', 'Flamengo']);

echo NOME;
echo '<br>';
echo 'Meu nome é ' . NOME . ' tenho ' . IDADE . ' anos e tenho ' . ALTURA . 'm de altura';
echo '<br>';

echo TIMES[0];
echo '<br>';


function exibeNome()
{
    echo NOME;
}
exibeNome();
