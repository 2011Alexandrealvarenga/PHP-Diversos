<?php 
// cria um caminho para nao ficar dando riquire
spl_autoload_register(function($class){

    if(file_exists(require 'classes/'.$class.'.php')){
        // caminho da pasta mas o nome da classe
        require 'classes/'.$class.'.php';
    }

});
?>