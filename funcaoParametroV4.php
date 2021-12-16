<?php 
    function somar($n1, $n2){
        $total= $n1 + $n2;
        return $total;
    }

    $x= 6;
    $y= 5;
    $resultado=somar($x,$y);
    echo 'total '. $resultado;
?>