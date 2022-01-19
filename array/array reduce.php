<?php 
$numero = [1,2,3,4,5];

// executa uma função dentro do array
// reduz todo o array a um item só

// subtotal armazena o valor do item a cada vez que faz o ciclo
function somar($subtotal, $item){
    $subtotal = $subtotal + $item;
    return $subtotal; 
}
$total = array_reduce($numero, 'somar');
echo $total;
?>