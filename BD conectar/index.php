<?php 
$pdo = new PDO('mysql:dbname=test;host=localhost','root','');

// consulta query
$sql = $pdo->query('SELECT * FROM usuarios');

// QUANTOS REGISTROS TEM
echo 'total: '.$sql->rowCount();

// fetch all = todos
// não tem mais duplicidade de dados na listagem
$dados = $sql->fetchALL(PDO::FETCH_ASSOC);


echo '<pre>';
print_r($dados);
?>