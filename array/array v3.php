<?php 
$lista = [10 ,20,50,2,30];

// verifica se os itens sao maiores que 30 e retorna
$filtrado = array_filter($lista, function($item){
    if($item >30){
        return true;
    }
    else{
        return false;
    }
});
print_r($filtrado);

?>