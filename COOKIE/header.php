<h3>Cabeçalho!</h3>
<?php 
// isset = se não tem o valor entao nao da erro
if(isset($_COOKIE['nome'])){
    $nome = $_COOKIE['nome'];
    echo'<p>'.$nome. '</p>';
}
?>

<hr>
<br>