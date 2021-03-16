<?php
//Arrays numericos
// $carros = array("BMW", "Clio", "Ferrari","Hilux");
$carros = array(1 => "BMW", 2 => "Clio", 3 => "Ferrari", 4 => "Hilux");
$carros[] = "Amarok";
print_r($carros);
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
print_r($motos);
echo "<br>";

$clintes = ["Rodrigo", "Felipe", "Henrique"];
print_r($clintes);
echo "<br>";
echo "<hr>";

//count
echo count($carros);
echo "<br>";
$totalClientes = count($clintes);
echo "Total clientes: " . $totalClientes;
echo '<hr>';

//Foreach
foreach ($carros as $valor) {
    echo $valor . "<br>";
}
echo '<hr>';

//Arrays associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.77);
$pessoa["cidade"] = "Gyn";
print_r($pessoa);
echo "<br>";
foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

//Arrays multi
$times = array(
    "cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
    "paulistas" => array("vice" => "Santos", "campeao" => "Sao Paulo", "terceiro" => "Palmeiras"),
    "baianos" => array("campeao" => "Bahia", "vice" => "vitoria", "terceiro" => "itabuna")
);

echo "<br>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";

echo "Paulistas*";
echo "<br>";
foreach ($times["paulistas"] as $indice => $value) {
    echo $indice . ":" . $value . "<br>";
}

echo "<hr>";

echo"Baianos*";
echo "<br>";
foreach ($times["baianos"] as $indice => $values) {
    echo $indice.":".$values."<br>";
}