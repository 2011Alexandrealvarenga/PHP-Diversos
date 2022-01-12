<?php 
class Ferias{

    private $nome;
    private $salario;
    private $inss;
    private $saldo;

    public function setNome($n){
        $this->nome = $n;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function setINSS($i){
        $this->inss = $i;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getSaldo(){
        return ($this->saldo + ($this->salario - $this->inss));

        // (saldo - (salario * inss))
    }
}


?>