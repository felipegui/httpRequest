<?php
session_start();
/*
require_once é um tipo de proteção ao seu sistema que
evita que você faça duplicatas de informações nas importações
*/
require_once('./header.php');
require_once('./header.php');
require('./config.php');

//include('./teste.php');

/*
Ao se iniciar uma sessão, certifique-se de
necessariamente declarar as variáveis de sessões assim: $_SESSION
*/

if( isset($_SESSION['aviso']) ) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<form method="POST" action="recebedor.php">

    <label>
        Name: <?php echo $usuario ?>
        </br>
        <input type="text" name="name" autocomplete="off"/>
    </label>
    </br>
    </br>

    <label>
        E-mail:
        </br>
        <input type="text" name="email" autocomplete="off"/>
    </label>
    </br>
    </br>

    <label>
        Idade:
        </br>
        <input type="text" name="age" autocomplete="off" />
    </label>
    </br>
    </br>

    <input type="submit" value="Enviar"/>

</form>