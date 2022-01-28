<?php 
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['msg']);

        // enviar 
        $para = "teste@gmail.com";
        $assunto = "pergunta do contato";
        $corpo = "nome: ".$nome. "Email ".$email." - Mensagem: " .$msg;

        $cabeçalho = "From: emailvalido"."\r\n".
                    "Reply-To: ".$email."\r\n".
                    "X-Mailer: PHP/".phpversion();
        mail($para,$assunto,$corpo,$cabeçalho);
        echo "<h2>Email enviado com sucesso</h2>";

    }else{

    }
?>
<form method="POST" action="">
    nome <br>
    <input type="text" name="nome"><br><br>
    email <br>
    <input type="email" name="email"><br><br>
    mensagem <br>
    <textarea name="msg" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="Enviar">
</form>