<?php 

require ('calculo.class.php');
$Vreceber = new Ferias();
$Vreceber->setNome("Alexandre");
$Vreceber->setSalario(1000);
$Vreceber->setinss(10);

echo $Vreceber->getSaldo();
echo $Vreceber->getNome();

// echo $vreceber->getnome();


?>