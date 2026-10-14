<?php

Class contaBancaria{
    public string $titular;
    public float $saldo;

    public function __construct($titular,$saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function depositar($valor){
        $this->saldo = $valor + $this->saldo;
    }
    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }
    public function exibirSaldo(){
        echo 'Titular: '.$this->titular . " | Saldo: " . $this->saldo . "<br>";
    }
}
$contaBancaria1 = new contaBancaria('Mateus',5);
$contaBancaria1->exibirSaldo();
$contaBancaria1->depositar(11000);
$contaBancaria1->sacar(1000);
$contaBancaria1->exibirSaldo();