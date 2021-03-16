<?php
/* 
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array.
 * implode("-", $array) = transforma array em string.
 */

$nomes = array("Primo" => "rodrigo", "tia" => "bruna", "prima" => "larissa");
$keys = array_keys($nomes);
print_r($keys);
echo"<br>";

$values = array_values($nomes);
print_r($values);
echo"<br>";

$carros = array("camaro", "uno", "gol");
$motos = ["Pop100", "Yamaha"];

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo"<br>";

$carros1 = array("camaro", "uno", "gol");
array_pop($carros1); //remove a ultima posicao
// array_shift($carros1); remove a primeira posicao
print_r($carros1);
echo"<br>";

$frutas = ["uva", "laranja", "banana"];
print_r($frutas);
echo"<br>";
array_unshift($frutas, "morango", "manga");
array_push($frutas, "morango", "manga"); //no final
print_r($frutas);
echo"<br>";

$keys = ["campeao", "vice", "terceiro"];
$values = ["vasco", "sao paulo", "botafogo"];

$times = array_combine($keys, $values);
print_r($times);
echo"<br>";
