<?php 

class Ferias{
    private $nome;
    private $salario;
    private $inss;
    private $saldo;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function setInss($inss){
        $this->inss = $inss;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    // get
    public function getNome(){
        return $this->nome;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function getSaldo(){
        return ($this->saldo = ($this->salario - $this->inss ) ); 
    }




}

?>