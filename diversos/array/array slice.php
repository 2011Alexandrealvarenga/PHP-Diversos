<?php 
$array = ['a','b','c','d','e'];

// array slice, corta o array, copia o array em pedaços

// primeiro parametro, array 
// segundo de onde por posição
// quantos itens

// 4 itens
// $retorno = array_slice($array, 0, 4);

// $retorno = array_slice($array, -2, 0);

// itens 2 a 4
$retorno = array_slice($array, 2, 4);


print_r($retorno);
?>