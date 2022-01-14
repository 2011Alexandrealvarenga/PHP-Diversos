<?php 
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

}else{
    // se der erro, volta para o arquivo adicionar.php
    header("location: adicionar.php");
    exit;
}
?>