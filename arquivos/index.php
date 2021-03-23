<html>

<body>
    <?php
    if (isset($_POST['enviar-form'])) :
        $formatoDisponiveis = ["png", "jpg", "jpeg", "gif"];
        $qtd_arquivo = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $qtd_arquivo) :

            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if (in_array($extensao, $formatoDisponiveis)) :
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $NovoNome = uniqid() . "$.extensao";
                if (move_uploaded_file($temporario, $pasta . $NovoNome)) :
                    echo "Upload feito com sucesso para $pasta.$novoNome<br>";
                else :
                    echo "Erro ao enviar o arquivo $temporario";
                endif;
            else :
                $echo = "$extensao é um formato inválido<br>";
            endif;


        //var_dump($_FILES)
        endwhile;
    endif
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple>
        <input type="submit" name="enviar-form">
    </form>
</body>

</html>