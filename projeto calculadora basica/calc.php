<?php 
// se n1, nao estiver vazio, n2 nao estiver vazio e op não estiver vazio ai ele faz a conta
if(!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['op'])){
    // transformar '' texto em numero decimal floatval
    $n1 = floatval($_GET['n1']);
    $n2 = floatval($_GET['n2']);
    $op = $_GET['op'];

    switch($op){
        case '-';
        $conta = $n1-$n2;
        echo $n1." - ".$n2." = ".$conta;
        break;

        case '+';
        $conta = $n1+$n2;
        echo $n1." + ".$n2." = ".$conta;
        break;

        case '*';
        $conta = $n1*$n2;
        echo $n1." * ".$n2." = ".$conta;
        break;
        
        case '/';
        $conta = $n1/$n2;
        echo $n1." / ".$n2." = ".$conta;
        break;
    }
}else{
    header('location: index.php');
}
?>