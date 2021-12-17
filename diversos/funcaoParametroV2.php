<?php 
    function somar($n1, $n2){
        $total= $n1 + $n2;
        return $total;
    }

    $x= somar(2,3);
    $y= somar(4,4);
    echo 'o resultado de x eh '.$x;
    echo '<br/>';
    echo 'o resultado de y eh '.$y;
?>