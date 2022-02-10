<?php 
require ('../config.php');

// verificar se foi o metodo correto
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'put'){

    // le arquivo, 
    parse_str(file_get_contents('php://input'), $input);
    
    // se o id existe entao pega o id, senão nulo
    $id = $input['id'] ?? null;
    $title = $input['title'] ?? null;
    $body = $input['body'] ?? null;

    // limpa e faz processo de segurança
    $id = filter_var($id);
    $title = filter_var($title);
    $body = filter_var($body);

    if($id && $title && $body){
        $sql = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $pdo->prepare("UPDATE notes SET title = :title, body = :body WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->bindValue(':title', $title);
            $sql->bindValue(':body', $body);
            $sql->execute();           

            // retorno
            $array['result'] =[
                'id' => $id,
                'title' => $title,
                'body' => $body

            ];

        }else{
            $array ['error'] = 'ID Inexistente';
        }

    }else{
        $array['error'] = 'Dados não enviados';
    }

}else{
    $array['error'] = 'metodo não permitido (apenas put)';
}
require ('../return.php');