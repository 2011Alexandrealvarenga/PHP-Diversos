<?php 
// FILTER SINITIZE SPECIAL CHARS = EVITA inserir script
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);
// verifica se enviou
if($nome && $idade){
    echo 'nome: '.$nome, '<br>';
    echo 'email: '.$email, '<br>';
    echo 'idade: '.$idade;

}else{
    echo 'nao enviou';
}
?>