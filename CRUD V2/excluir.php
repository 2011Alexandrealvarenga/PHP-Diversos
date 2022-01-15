<?php 
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

// se tiver dado, senao volta pra index
if($id){
$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
$sql->bindValue(":id", $id);
$sql->execute();


}

header("location: index.php");
exit;

?>