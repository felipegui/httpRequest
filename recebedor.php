<?php
    session_start();

    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

    if( $nome ) {
        echo "Nome enviado: ".$nome."<br/>";
        echo "Nome e-mail: ".$email."<br/>";
        echo "Idade enviada: ".$idade;
    } else {
        $_SESSION['aviso'] = 'Preencha os campos corretamente';

        header("Location: index.php");
        exit;
    }
?>