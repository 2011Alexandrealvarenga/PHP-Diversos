<?php 
$array = [
    'nome' => 'Ale',
    'idade' => 90,
    'empresa' => 'ale empresa'
];
// se tem 'idade' no array
if(key_exists('idade', $array)){
    $idade = $array['idade'];
    echo $idade.' anos';

}else{
    echo 'não encontrado';
}

?>