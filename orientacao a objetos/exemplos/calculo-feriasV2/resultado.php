<?php 
require ('calculo.class.php');
$ssalario = new Ferias();
$ssalario->setNome("Ale Alvarenga");
$ssalario->setSalario(1000);
$ssalario->setInss(10);

echo $ssalario->getSaldo();

?>