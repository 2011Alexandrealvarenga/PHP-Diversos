<?php 
$hash = '$2y$10$jfSC.Y60Vi2Zbku9R/HAKulpPnIOaJo2QDkM/STJL4QJs7Gmgf3LK';
$senha = '123';

if(password_verify($hash, $senha)){
    echo 'correta';
}else{
    echo 'incorreta';
}
?>
