<form method="GET">
    valor do produto <br>
    <input type="number" name="valor_produto">
    tx de imposto (em %)
    <input type="number" name="tx">
    <br>
    <input type="submit" value="Calcular">
</form>
<?php 
if(isset($_GET['valor_produto']) && !empty($_GET['valor_produto'])) {

    $valor_produto = $_GET['valor_produto'];
    $tx = $_GET['tx'];
    

    // $imposto = (($valor_produto /100) * $tx);
    // echo 'Imposto '.$imposto. '%';
    $vl_liquido = ($valor_produto - (($tx * $valor_produto)/ 100));
    $vl_imposto = $valor_produto - $vl_liquido;

    echo 'valor do produto R$ '.$valor_produto . '<br>'; 
    echo 'taxa '.$tx . '%<br>';
    echo '<hr>';


    echo 'valor imposto R$ '.$vl_imposto.'<br>';    
    echo 'valor liquido R$ '.$vl_liquido;    
     
}else{
exit;
}
?>