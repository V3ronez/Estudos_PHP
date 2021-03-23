<html>
<?php

// VALIDAÇÕES
//Funções (filter_input - Filter_var)
//FILTER_VALIDATE_INT
//FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_FLOAT
//FILTER_VALIDATE_IP
//FILTER_VALIDATE_URL

// SANITIZE
//Funções (filter_input - Filter_var)
//FILTER_SANITIZE_SPECIAL_CHARS
//FILTER_SANITIZE_NUMBER_INT
//FILTER_SANITIZE_EMAIL
//FILTER_SANITIZE_URL

if (isset($_POST['enviar-form'])) :
    //array de erros
    $erros = [];

    //validaçoes
    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) :
        $erros[] = "Idade precisa ser inteiro";
    endif;
    if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) :
        $erros[] = "email precisa ser inválido";
    endif;
    if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) :
        $erros[] = "peso precisa ser float";
    endif;
    if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) :
        $erros[] = "IP inválido";
    endif;
    if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) :
        $erros[] = "URL inválida";
    endif;

    //exibindo msg;
    if (!empty($erros)) :
        foreach ($erros as $erro) :
            echo "<li>$erro</li>";
        endforeach;
    else :
        echo "Parábens, dados corretos!";
    endif;
endif;

?>

<body>
    <!-- <form action="dados.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="sumbit"> Enviar </button>
    </form> -->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="sumbit" name="enivar-form"> Enviar </button>
    </form>


</body>

</html>