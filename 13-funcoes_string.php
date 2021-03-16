<?php
/* funçoes para strings
strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos
str_repeat
strlen
str_replace
strpos
*/

$nome = "henrique";
$novoNome =strtoupper($nome);
$novoNome1 =strtolower($nome);
echo $novoNome;
echo "<br>";
echo$novoNome1;
echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem,5, 2);
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH); 
echo $novoObjeto;
echo "<hr>";

$string = str_repeat("Sucesso! ", 4);
echo $string;
echo "<hr>";

$mensagem = "Olá mundo!";
echo strlen($mensagem);
echo "<hr>";

$texto =  "A selecao argentina será campeao da copa do mundo de 20032";
$novoTexto = str_replace("argentina", "brasileira", $texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto, "copa");