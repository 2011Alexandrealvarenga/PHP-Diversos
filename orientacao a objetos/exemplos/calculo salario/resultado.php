<?php 
require ('funcionario.class.php');

$funcionario = new Funcionario();
$funcionario->setNome('Alexandre');
$funcionario->setSalarioBase(1000);
$funcionario->setHorasExtras(5);
$funcionario->setValorHora(2);

echo $funcionario->getSalarioEfetivo();




?>