<?php

for ($contador = 0; $contador <= 10; $contador++) :
    // echo "O contador é $contador <br>";
    echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<br>";

$cores = ["Verde", "Vermelho", "Azul"];

foreach($cores as $indice => $value):
    echo $indice."-".$value."<br>";
endforeach;
