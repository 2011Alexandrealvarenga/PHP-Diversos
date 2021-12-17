<?php 
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
// verifica se enviou
if($nome && $idade){
    echo 'nome: '.$nome, '<br>';
    echo 'idade: '.$idade;

}else{
    echo 'nao enviou';
}
?>