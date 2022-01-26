<?php 
try{
$pdo = new PDO("mysql:dbname=tabelas;host=localhost", 'root','');
}catch (PDOException $e){
    echo 'erro'.$e->getMessage();
    exit;
}
$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll();
    $carac = array();
    foreach($lista as $usuario){
        // separa por virgulas, fazendo uma array por palavra
        $palavras = explode(",", $usuario['caracteristicas']);
        foreach($palavras as $palavra){
            // tira os espaços
            $palavra = trim($palavra);
            // se exite carac e na chave a palavra 
            if(isset($carac[$palavra])){
                $carac[$palavra] ++;
            }else{
                $carac[$palavra] =1;

            }
        }
    }
    // ordenação
    arsort($carac);

    // as palavras ficaram em palavras
    $palavras = array_keys($carac);
    // a contagem ficara em contagem
    $contagens = array_values($carac);
    $tamanhos = array(15,20,30,40);
    // maior numero entre varios numeros
    $maior = max($contagens);
    // exibir cada palavra dentro de for
    for($x=0;$x<count($palavras);$x++){
        // media do numero maior que tem
        $n = $contagens[$x]/$maior;
        // lista de tipos de tamanho
        
        $h = ceil($n*count($tamanhos));
        echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$x]."(".$contagens[$x].")</p>";
    }

}
?>