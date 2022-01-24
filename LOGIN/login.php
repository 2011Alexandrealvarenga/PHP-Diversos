<?php 
// verifica se tem uma sessao aberta
session_start();

// verificar se o usuairo enviou algum dado
if(isset($_POST['email']) && empty($_POST['email']) == false){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = '';

    try{
        $db = new PDO($dsn, $dbuser, $dbpass);
        $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            print_r($dado);

        }else{

        }

    }catch(PDOException $e){
        echo 'falou: '.$e->getMessage();
    }
}
?>
<h1>pagina de login</h1>
<form method="POST" action="">
    email: <br>
    <input type="email" name="email"><br><br>
    senha: <br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Entrar">
</form>