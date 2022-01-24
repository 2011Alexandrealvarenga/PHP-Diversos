<?php 
try{
    $pdo= new PDO("mysql:dbname=tabelas;host=localhost", 'root', '');
}catch(PDOException $e){
    echo "erro: ".$e->getMessage();
    exit;

}
    // se foi e não esta vazio
    if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
        $ordem = addslashes($_GET['ordem']);
        $sql="SELECT * FROM usuarios ORDER BY ".$ordem;
    }else{
        $ordem = " ";
        $sql = "SELECT *  FROM usuarios";
    }
?>
<form action="" method="get">
    <select name="ordem" onchange="this.form.submit()">
        <option value=""></option>
        <option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':' '; ?>>Pelo Nome</option>
        <option value="idade" <?php echo ($ordem=="idade")?'selected="selected"':' '; ?>>Pela Idade</option>


    </select>
</form>
<br>
<table border="1" width="400px">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php 


    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario):
        ?>
        <tr>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['idade']; ?></td>
        </tr>
        <?php 
        endforeach;
       
    }else{

    }
    ?>
</table>