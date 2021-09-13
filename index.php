<?php
require('./header.php');
?>

<form method="POST" action="recebedor.php">

    <label>
        Name:
        </br>
        <input type="text" name="name" />
    </label>
    </br>
    </br>

    <label>
        Idade:
        </br>
        <input type="text" name="age" />
    </label>
    </br>
    </br>

    <input type="submit" value="Enviar"/>

</form>