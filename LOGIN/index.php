<?php 
// verificar se existe uma sessao
session_start();
// se tem algum dado de sessao salvo com a chave id e não estiver vazia
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo 'area restrita';
}else{
    header("location: login.php");
}
?>

