<?php 
// COOKIE FICA NO NAVEGADOR / SESSAO FICA NO BACK END

// se existir uma sessao, ele vai recuperar
session_start();

require('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';

}
?>
<a href="apagar.php">apagar cookie</a>
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