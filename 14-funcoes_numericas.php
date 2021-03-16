<?php
// funcoes para numeros

//     number_format
//     round
//     ceil
//     floor
//     rand

$db = 1234.56;
$preco = number_format($db,2,",", ".");
echo "O valor do produto é R$$preco";
echo"<hr>";

echo round(3.6);
echo"<hr>";
echo ceil(3.6);
echo"<hr>";
echo floor(3.6);
echo"<hr>";
echo rand(1,20);