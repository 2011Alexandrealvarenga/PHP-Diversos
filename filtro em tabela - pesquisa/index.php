<?php 
try{
    $pdo = new PDO("mysql:dbname=devsnotes;host=localhost",'root','');
}catch(PDOException $e){
echo "erro: ".$e->getMessage();
}
    // se foi inserido sexo e diferente de sem valor
    if(isset($_POST['sexo']) && $_POST['sexo'] != ''){
        $sexo = $_POST['sexo'];
        $sql = $pdo->prepare('SELECT * FROM usuarios WHERE sexo =:sexo');
        $sql->bindValue(':sexo', $sexo);
        $sql->execute();
    }else{
        $sexo = '';
        $sql = "SELECT * FROM usuarios";
        $sql=$pdo->query($sql);
    }
?>
<form method='POST'>
    <select name="sexo">
        <option value=""></option>    
        <option value="0" <?php echo ($sexo=='0')?'selected="selected"':''; ?> >Masculino</option>
        <option value="1" <?php echo ($sexo=='1')?'selected="selected"':''; ?> >Feminino</option>
    </select>
    <input type="submit" value="Filtrar">
    <br>
</form>
<table border="1" width="100%">
    <tr>
        <th>NOME</th>
        <th>SEXO</th>
        <th>IDADE</th>
    </tr>
    <?php 
    $sexos = array(
        '0' => 'Masculino',
        '1' => 'feminino'
    );

    $lista = [];
    if($sql->rowCount() > 0){
       $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
       foreach($lista as $usuario): ?>
      
       <tr>
           <td><?php echo $usuario['nome']; ?></td>
           <td><?php echo $sexos[$usuario['sexo']]; ?></td>
           <td><?php echo $usuario['idade']; ?></td>
       </tr>
       <?php endforeach;
    }

    ?>
</table>