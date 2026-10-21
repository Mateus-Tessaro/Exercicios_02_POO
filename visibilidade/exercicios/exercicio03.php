<?php

Class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo =(10), $tanqueInicial = (0)){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }
    public function abastecer($litros){
        if($litros < 0){
           echo 'Valor indisponivel! <br>';
        }else{
            echo 'Foi abastecido ' . $litros . ' litros. <br>';
            $this->tanque += $litros;
        }
    }
    public function dirigir($km){
        $qtd_corrida = 1 % $km;
        if($qtd_corrida < 0){
            echo 'Não é possivel dirrigir! <br>';
        }else{
            echo 'Você dirigiu por '. $km .', seu tanque está com: '.$this->tanque - $qtd_corrida.'l <br>';
        }
    }
    public function exibirInfo(){
        echo 'Modelo: '. $this->modelo . ' | Consumo: ' . $this->consumo .  ' | Tanque: ' . $this->tanque . '<br>';
    }
}
$carro = new Carro('Honda Civic', 12, 20);
$carro->exibirInfo();
$carro->dirigir(10);
$carro->abastecer(10);
$carro->exibirInfo();
