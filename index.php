<?php
require('./header.php');
?>

<form method="POST" action="recebedor.php">

    <label>
        Name:
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