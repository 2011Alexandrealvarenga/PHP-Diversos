<?php 
require 'config.php';
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if($name && $email){
    // traz todos os registros de email
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();
    // se NÃO tiver registro entao salva no bd
    if($sql->rowCount() ===0){
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES(:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();
        header("location: index.php");
    }else{
        // header("location: index.php");
        header("location: adicionar.php");
        exit;
    }
}else{
    // se der erro, volta para o arquivo adicionar.php
    header("location: adicionar.php");
    exit;
}
?>