<?php 
require ('header.php');
?>
<form method="POST" action="recebedor.php">
    <label for="">
        nome:
        <br>
        <input type="text" name="nome" />
    </label><br><br>
    <label for="">
        email:
        <br>
        <input type="text" name="email" />
    </label><br><br>
    <label for="">
        idade:
        <br>
        <input type="text" name="idade" />
    </label><br><br>
    <input type="submit" value="enviar">
</form>