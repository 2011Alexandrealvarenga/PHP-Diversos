<?php 

$pessoas = [
    ['nome' => 'fulano','sexo' =>'m', 'nota'=> 9],
    ['nome' => 'ciclano','sexo' =>'m', 'nota'=> 7],
    ['nome' => 'beltrano','sexo' =>'f', 'nota'=> 10],
    ['nome' => 'paulo','sexo' =>'m', 'nota'=> 8],
    ['nome' => 'cintia','sexo' =>'f', 'nota'=> 9],
    ['nome' => 'jessica','sexo' =>'f', 'nota'=> 9],

];
// quantidade de homens
function contar_m($subtotal,$item){
    if($item['sexo'] === 'm'){
        $subtotal++;
    }
    return $subtotal;
}

// soma das notas dos homens

function soma_m($subtotal, $item){
    if($item['sexo'] === 'm'){
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');
echo 'o total do sexo masculin o é = '.$total_m .'<br>';

$total_n = array_reduce($pessoas, 'soma_m');
echo 'soma das notas do sexo masculino = '. $total_n .'<br>';


$media_n = $total_n / $total_m;
echo 'a media das notas '. $media_n;
?>