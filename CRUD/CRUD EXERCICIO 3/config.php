<?php 

$db_user= 'root';
$db_pass= '';
$db_host= 'localhost';
$db_name= 'test';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
?>