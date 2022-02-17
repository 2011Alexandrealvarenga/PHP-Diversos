<?php 
require 'config.php';

// verifica se nao esta vazio
if(!empty($_GET['id'])){
    //  transforma em inteiro
    $id = intval($_GET['id']);

    $sql = $pdo->prepare("UPDATE usuarios SET status = '0' WHERE id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();

}
// vai voltar para o index se correto ou nao
header('location: index.php');
exit;
?>
