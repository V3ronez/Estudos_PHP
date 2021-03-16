<?php
//***** Escalares
// string
$nome = "Olá Mundo?";
var_dump($nome);
if (is_string($nome)) : echo "É uma string";
else :
    echo "Não é string";
endif;
echo "<hr>";

// int
$idade = 28;
var_dump($idade);
if (is_int($idade)) :
    echo "É um inteiro";
else :
    echo "Não é inteiro";
endif;
echo "<hr>";


//float
$altura = 1.77;
var_dump($altura);
if (is_float($altura)) :
    echo "É um float";
else :
    echo "Não é float";
endif;
echo "<hr>";

$admin = false;
var_dump($admin);
if (is_bool($admin)) :
    echo "É true";
else :
    echo "É false";
endif;
echo "<hr>";

$carro = array("Gol", "Clio", 1, 2, 3, true);

var_dump($carro);
if (is_array($carro)) :
    echo "É um array";
else :
    echo "Não é array";
endif;
echo "<hr>";

//object

class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente -> atribuirNome("Henrique");
var_dump($cliente);

//resource

