<?php 
// class Matematica{
//     public static function somar($x, $y){
//         return $x + $y;
//     }
// }

// $m = new Matematica();
// echo $m->somar(10,20);


// usando static
class Matematica{
    public static function somar($x, $y){
        return $x + $y;
    }
}

echo Matematica::somar(20,30);

?>