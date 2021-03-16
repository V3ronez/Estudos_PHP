<?php

function exibeNome($nome){
    echo "Meu nome é $nome";
}
exibeNome("Henrique");
echo "<hr>";

function calcMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "O aluno $nome foi aprovado com a media: $media";
    else:
        echo "O aluno $nome foi reprovado com a media: $media";
    endif;
}

calcMedia("Bob",5, 6, 7, 8);