<?php 
require 'config.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{

    }
}else{
    header("location: index.php");
    exit;
}
?>
<h1>Editar usuario</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    <label for="">
        nome: <br>
        <input type="text" name="name" value="<?php echo $info['nome']; ?>"><br>        
    </label>
    <label for="">
        email: <br>
        <input type="text" name="email" value="<?php echo $info['email']; ?>"><br>        
    </label><br>
    <input type="submit" value="Salvar">
    
</form>