<?php 
require ('../config.php');

// verificar se foi o metodo correto
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'post'){
    $title = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');
    if($title && $body){
        $sql = $pdo->prepare("INSERT INTO notes (title, body) values (:title, :body)");
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->execute();

        // pega o ultimo id inserido
        $id = $pdo->lastInsertId();
        
        // preenche no array os valores correspondentes
        $array['result'] = [
            'id' => $id,
            'title' => $title,
            'body' => $body
        ];
    }else{
        $array ['error'] = 'campos não enviados';
    }

}else{
    $array['error'] = 'metodo não permitido (apenas post)';
}
require ('../return.php');