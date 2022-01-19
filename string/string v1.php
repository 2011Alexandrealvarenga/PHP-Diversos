<?php 
$nome ='   Ale Alvarenga';


// tira espacos 
// echo trim($nome);

// quantos caracteres
// echo 'quantos caracteres ', strlen($nome);

// minusculo
// echo 'minusculo', strtolower($nome);

// maiusculo
// echo 'maiusculo', strtoupper($nome);

// 
// substitui valores de alvarenga para fernandes
// $nomeAlterado =str_replace('Alvarenga','Fernandes', $nome);
// echo $nomeAlterado;


$nomePedaco = substr($nome, 3,9);
echo $nomePedaco;
?>