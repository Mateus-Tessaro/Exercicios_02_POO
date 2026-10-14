<?php

Class Pessoa{
    public string $nome;
    public string $idade;

    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }

    public function exibirDadosPessoa(){
        echo "Nome: " . $this->nome . " | Idade: " . $this->idade;
    }

}

$pessoa = new Pessoa('Mateus',16);

$pessoa->exibirDadosPessoa();

?>

