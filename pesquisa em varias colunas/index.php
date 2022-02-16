
<h3>Digite email/cpf do usuario</h3>
<br>
<form method="GET">
    <input type="text" name="campo">
    <input type="submit" value="Pesquisar">
</form>
<hr>
<?php 
    // se não esta vazio
    if(!empty($_GET['campo'])){
        $campo = $_GET['campo'];
        try{
            $pdo = new PDO('mysql:dbname=tabelas;host=localhost','root','');
        }catch(PDOException $e){
            echo 'ERRO: '.$e->getMessage();
            exit;
        }
        $sql = "SELECT * FROM usuarios WHERE nome=:nome OR email=:email OR cpf=:cpf";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':nome', $campo);
        $sql->bindValue(':email', $campo);
        $sql->bindValue(':cpf', $campo);
        $sql->execute();
        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            echo "nome: ".$sql['nome'];
        }else{
            echo 'registro nao encontrado';
        }
    }
?>