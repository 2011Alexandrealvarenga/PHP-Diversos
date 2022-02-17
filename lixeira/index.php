<?php 
require 'config.php';
$lista = [];
$id = filter_input(INPUT_GET, 'id');
$sql = $pdo->query('SELECT * FROM usuarios WHERE status = 1');

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);    
}
?>
<h3>listar usuarios</h3>

<table width="100%" border='1'>
    <tr>
        <th>NOME</th>
        <th>STATUS</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $dados): ?>
        <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['status']; ?></td>
            <td><a href="excluir.php?id=<?php echo $dados['id']; ?>">[Excluir]</a></td>
        </tr>
    <?php endforeach; ?>    
</table>
