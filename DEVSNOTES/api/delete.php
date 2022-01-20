<?php 
require ('../config.php');

// verificar se foi o metodo correto
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){

    // le arquivo, 
    parse_str(file_get_contents('php://input'), $input);
    
    // se o id existe entao pega o id, senão nulo
    $id = $input['id'] ?? null;


    // limpa e faz processo de segurança
    $id = filter_var($id);


    if($id){
        $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

    }else{
        $array['error'] = 'Dados não enviados';
    }

}else{
    $array['error'] = 'metodo não permitido (apenas delete)';
}
require ('../return.php');