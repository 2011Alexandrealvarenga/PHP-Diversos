<?php 
require 'config.php';
if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);

    $sql = "SELECT *  FROM usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $id = $sql['ID'];

        // gerando token com tempo
        $token = md5(time().rand(0, 999).rand(0, 9999));

        // salvar na tabela do token
        $sql = "INSERT INTO usuarios_token (id_usuario, hash) VALUES (:id_usuario, :hash)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id_usuario', $id);
        $sql->bindValue(':hash', $token);
        $sql->execute();

        $link = 'http://localhost/PHP/PHP/senha-esqueciasenha/redefinir.php?token='.$token;
        $mensagem = 'acesse o seu email e click no link para redefinir a senha - '.$link;

        $assunto = 'redefinição de senha';
        $headers='From: seuemail@gmail.com'.'\r\n'.
                'X-Mailer: PHP/'.phpversion();

        echo $mensagem;
        exit;
    }
}
?>
<form method="POST" action="">
    Qual o seu email <br>
    <input type="email" name="email"><br>
    <input type="submit" value="enviar">
</form>