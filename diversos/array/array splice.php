<?php 
$array = ['a','b','c','d','e'];

// remove itens do array
// primeiro parametro, array 
// segundo de onde por posição
// quantos itens

array_splice($array, 1,1);

// add item no quarto parametro
// array_splice($array, 1, 1, ['k','z']);


print_r($array);

?>