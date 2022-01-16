<?php 
$db_name= 'test';
$db_host= 'localhost';
$user='root';
$pass='';
$pdo = new PDO('mysql:dbname='.$db_name.';host='.$db_host,$user,$pass);
?>