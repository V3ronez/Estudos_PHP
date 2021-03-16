<?php
// Operadores lógicos
// Nos permitem fazer comparação entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor) //apenas um pode ser verdadeiro
// negação (!)

$idade = 25;
$nome = "Henrique";

if (($idade == 25) or ($nome == "Henrique")) :
    echo "É verdadeiro";
else :
    echo "É falso";
endif;
