<?php 
// usa a funcao em um loop
function dividir($numero){
    $metade = $numero / 2;
    echo $metade.'<br/>';

    // round - arrendonda o numero
    if(round($metade) > 0){
        dividir($metade);
    }
}

dividir(100);
?>