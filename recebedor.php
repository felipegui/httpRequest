<?php
    $name = filter_input( INPUT_POST, 'name' );
    $age = filter_input( INPUT_POST, 'age' );

    if( $name && $age ) {
        echo "Nome: ".$name."</br>";
        echo "Idade: ".$age;
    } else {
        header("Location: index.php");
        exit;
    }
?>