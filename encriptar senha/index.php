<?php 
$senha = '123';

// password defult = faça o hash mais seguro
$hash = password_hash($senha, PASSWORD_DEFAULT);
// $hash = password_hash($senha, PASSWORD_BCRYPT);


echo $senha, '<br>';
echo $hash, '<br>';
?>