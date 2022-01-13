<?php 
// cria um caminho para nao ficar dando riquire
spl_autoload_register(function($class){
    
    // caminho da pasta mas o nome da classe
    require 'classes/'.$class.'.php';
});
$m = new Matematica();
echo $m->somar(10,20);

?>