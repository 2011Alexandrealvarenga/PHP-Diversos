<?php 
$user = 'root';
$pass = '';
$host = 'localhost';
$db_name = 'test';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$host, $user, $pass);

?>