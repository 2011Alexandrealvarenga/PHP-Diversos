<?php 
class Funcionario{
    private $nome;
    private $salarioBase;
    private $horasExtras;
    private $valorDaHora;

    public function setNome($n){
        $this->nome = $n;
    }
    public function setSalarioBase($base){
        $this->salarioBase = $base;
    }
    public function setHorasExtras($extra){
        $this->horasExtras = $extra;
    }
    public function setValorHora($valorHora){
        $this->valorDaHora = $valorHora;
    }

    public function getSalarioEfetivo(){
        return ($this->salarioBase + ($this->horasExtras * $this->valorDaHora));
    }

}
?>