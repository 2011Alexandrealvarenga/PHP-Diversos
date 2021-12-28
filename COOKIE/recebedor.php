<?php 

session_start();
// FILTER SINITIZE SPECIAL CHARS = EVITA inserir script
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);
// verifica se enviou
if($nome && $idade){
    // setando o cookie
    // 30 dias
    $expiracao = time() + (86400 * 30);
    
    setcookie('nome', $nome, $expiracao);

    echo 'nome: '.$nome, '<br>';
    echo 'email: '.$email, '<br>';
    echo 'idade: '.$idade;

}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente';
    header('location: index.php');
    exit;
}
?>