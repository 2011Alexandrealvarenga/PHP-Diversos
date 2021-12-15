<?php 
$nome = 'Ale';

$nomeCompleto = $nome;


// se houver valor na variavel, insere o valor, senao insere o que eu definir, no caso ''
// $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

// versao null call
$nomeCompleto .= $sobrenome ?? ' Fernandes';

echo $nomeCompleto;

?>