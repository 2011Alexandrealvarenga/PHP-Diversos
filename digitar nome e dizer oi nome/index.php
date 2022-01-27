<form method="GET" >
    <br>
    <span>digite seu nome</span>
    <input type="text" name="nome">

    <input type="submit" value="Ola">
</form>
<?php 
if((isset($_GET['nome'])) && (!empty($_GET['nome'])) ){

    $nome = $_GET['nome'];
    echo 'Ola '.$nome;
    exit;
}

?>