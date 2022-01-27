<?php 
$arquivo = "imagem.png";

$largura = 200;
$altura = 200;

// getimagesize = pega o tamanho original
list($largura_original, $altura_original) = getimagesize($arquivo);
 
$ratio = $largura_original / $altura_original;


if($largura / $altura > $ratio){
    $largura = $altura * $ratio;
}else{
    $altura = $largura / $ratio;
}
// criar nova imagem sem nada dentro
$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefrompng($arquivo); 
// imagem redimensionada 
// terceiro parametro altura e largura
imagecopyresampled(
    $imagem_final, $imagem_original, 0, 0, 0, 0,
    $largura, $algura, $largura_original, $altura_original
);

// salvar arquivo em imagem
// header("Content-Type: image/png");
imagepng($imagem_final, "mini_imagem.png");
echo "imagem redimensionalda";
?>