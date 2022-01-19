<?php 
$senha = '123';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo $senha, '<br>';
echo $hash, '<br>';
?>