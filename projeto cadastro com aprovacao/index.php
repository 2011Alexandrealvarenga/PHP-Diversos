/**
* cadastro com aprovação apos envio de email
 */

 <?php 
 if(isset($_POST['NOME']) && !empty($_POST['nome']) ){
    $nome= addslashes($_POST['nome']);
    $email= addslashes($_POST['email']);
    require 'config.php';

    $pdo->query("INSERT INTO usuarios SET nome='$nome', email='$email'");
    $id = $pdo->lastInsertId();
    
    // cirar um codigo para enviar por email md5 do id do usuario
    $md5 = md5($id);
    $link = 'http; endereco'.$md5;

    $assunto="Confirme seu cadastro";
    $msg = "clique no link abaixo para confirmar seu cadastro:\n\n".$link;
    $headers = "From: suporte@gmail.com"."\r\n".
    "X-Mailer: PHP/".phpversion();

    mail($email, $assunto, $msg, $headers);
    echo "<h2>ok! confirme seu cadastro agora</h2>";
    exit;

}
 ?>
 <form action="" method="POST">
    nome: <br>
    <input type="text" name="nome"> <br>
    email: <br>
    <input type="email" name="email"><br>
    <input type="submit" value="cadastrar">
 </form>