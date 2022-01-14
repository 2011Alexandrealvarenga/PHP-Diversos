<?php 
echo '<pre>';
print_r($_FILES);

// envia o arquivo com o nome original
// $nome = $_FILES['arquivo']['name'];

// envia de acordo com a data
$nome = md5(time().rand(0, 1000)).'.jpg';

// $files'arquivo''tmp_name' = onde o arquivo esta temporariamente
// 'arquivo' nome = para onde ira apos mover
move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivo/'.$nome);
?>