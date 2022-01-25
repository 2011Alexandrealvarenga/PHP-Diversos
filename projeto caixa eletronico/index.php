<?php 
session_start();
require 'config.php';

if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])){
    $id = $_SESSION['banco'];
    $sql = $pdo->prepare("SELECT * FROM contas WHERE  id = :id");
    $sql->bindValue(':id', $id);

    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch();
    }
}else{

    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
</head>
<body>

        <h1>Banco XYZ</h1>
        titular: <?php echo $info['titular']; ?>
        <br>
        Agencia: 
        <?php echo $info['agencia']; ?>
        
        <br>
        Conta: <?php echo $info['conta']; ?>
        <br>
        saldo:
        <?php echo $info['saldo']; ?>
<br><br>
    <a href="sair.php">Sair</a>
    <br>
    <hr>
    <h3>Movimentação/Extrato</h3>
    <br>
    <a href="add-transacao.php">Adicionar transação</a>
    <br><br>
    <table width="400" border="1">
        <tr>
            <th>Data</th>
            <th>Valor</th>
        </tr>
        <?php 
            $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
            $sql->bindValue(':id_conta', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $item){
                    ?>
                    <tr>
                        <td><?php echo date('d/m/y H:i', strtotime($item['data_operacao'])); ?>
                        </td>
                        <td>
                         <?php if($item['tipo'] == '0'): ?>
                             <span style="color:green">R$<?php echo $item['valor'] ?></span>
                        <?php else: ?>
                            <span  style="color:red">R$ - <?php echo $item['valor'] ?></span>
                        <?php endif; ?>
                        </td>
                    </tr>
                    <?php 
                }

            }
        ?>
    </table>
</body>
</html>