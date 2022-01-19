<?php 
$lista = ['bruno' ,'joao','cesar'];

$aprovados = ['bruno','joao'];

// lista compara com aprovados, a diferença sao os reprovados
$reprovados = array_diff($lista,$aprovados);
print_r($reprovados);
?>