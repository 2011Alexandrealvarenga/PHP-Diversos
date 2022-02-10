<?php  
$URL_ATUAL= "http://$_SERVER[HTTP_HOST]/cotador-empresarial/obrigado-contador-empresarial/";
echo $URL_ATUAL;

'<br>';
$URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $URL_ATUAL;
?>