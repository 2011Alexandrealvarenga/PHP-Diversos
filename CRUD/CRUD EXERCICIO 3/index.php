<?php 
require 'config.php';
$lista= [];
$sql = $pdo->query("SELECT * FROM usuarios");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<a href="adicionar.php">ADICIONAR USUARIO</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuarios): ?>
        <tr>
            <td><?php echo $usuarios['id']; ?> </td>
            <td><?php echo $usuarios['nome']; ?> </td>
            <td><?php echo $usuarios['email']; ?> </td>
            <td></td>
        </tr>
    <?php endforeach;?>

</table>