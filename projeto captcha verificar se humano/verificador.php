<?php 
session_start();

// se esta fazil o n
if(!empty($_POST['n'])){
    $n = intval($_POST['n']);
    // verifica se os valores estao o mesmo
    if($_SESSION['v'] == $n){
        echo 'humano';
    }else{
        echo 'fake';
    }
}else{
header('location: index.php');
}