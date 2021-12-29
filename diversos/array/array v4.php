<?php 
$lista = [10 ,20,50,2,30];

// verifica se tem o valor no array
// if(in_array(10 , $lista)){
//     echo    'exite';
// }
// else{
//     echo'nao exite';
// }

// verifica em qual posicao esta o valor
$achei = array_search(50, $lista);
echo $achei;
?>