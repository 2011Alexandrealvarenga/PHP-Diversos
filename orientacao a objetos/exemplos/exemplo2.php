<?php 
class Pessoa{
    public $nome;
    public $idade;

    // metodo
    public function Falar(){
        echo $this->nome .' com idade ' .$this->idade.' acabou de falar';
    }
}
// instanciando a classe
$rodrigo = new Pessoa();
$rodrigo->nome ='Alexandre Alvarenga';
$rodrigo->idade = 36;
// var_dump($rodrigo);

// insiro uma ação ao objeto rodrigo
$rodrigo->Falar();
?>