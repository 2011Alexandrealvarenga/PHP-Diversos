<?php 
try {
    $dsn = "mysql:dbname=tabelas;host=localhost";
    $dbuser='root';
    $dbpass='';
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}

/*
1. calcular a quantidade total de paginas
2. definir o $p
3. fazer a query com LIMIT
*/
$qt_por_pagina = 5;
$total = 0;
// count() conta quantos registro eu tenho
$sql = "SELECT COUNT(*) as c FROM posts";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
// recebe o numero de posts que tem salvo no banco
$total = $sql['c'];

$paginas = $total / $qt_por_pagina;


// pg numero da paginação
$pg = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){
    $pg = addslashes($_GET['p']);
}
// 10 registros por pagina
$p = ($pg - 1 ) * $qt_por_pagina;


$sql = "SELECT * FROM posts LIMIT $p, $qt_por_pagina";
$sql = $pdo->query($sql); 

if($sql->rowCount()>0){
    foreach($sql->fetchAll() as $item){
        echo $item['id'].' - '.$item['titulo'].'<br>';
    }
}
echo '<hr/>';
for($q=0;$q<$paginas;$q++){
    echo '<a href="./?p='.($q+1).'">[ '.($q+1).' ]</a>'; 
}