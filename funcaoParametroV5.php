<?php 
    function somar($n1, $n2, &$total){
        $total= $n1 + $n2;
    }

    $x= 6;
    $y= 5;

    somar($x, $y, $soma);
    echo 'total '. $soma;
?>