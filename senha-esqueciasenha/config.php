<?php 
try{
    $pdo = new PDO("mysql:dbname=tabelas;host=localhost",'root','');
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}
?>
