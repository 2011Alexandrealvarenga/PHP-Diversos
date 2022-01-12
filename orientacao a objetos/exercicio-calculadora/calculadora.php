<?php
class Calculadora {

  private $numero = 0;
  public function add($n = 0) {
    $this->numero += $n;
  }

  public function sub($n = 0) {
    $this->numero -= $n;
  }

  public function multipy($n = 0) {
    $this->numero *= $n;
  }

  public function divide($n = 0) {
    $this->numero /= $n;
  }

  public function clear() {
    $this->numero = 0;
  }

  public function total() {
    return $this->numero;
  }
}