<?php 
session_start();

$n1 = rand(0, 10);
$n2 = rand(0, 10);

// soma os numeros e joga dentro da sessao
$_SESSION['v'] = $n1 + $n2;
?>
<h3>verificador de humano</h3>

<form method="POST" action="verificador.php">
    <?php echo $n1; ?> + <?php echo $n2; ?> =
    <input type="number" name="n">
    <input type="submit" value="Verificar">
</form>