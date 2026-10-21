<?php

Class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $quantidade;
    }
    public function vender($quantidade){
        if($quantidade <= $this->estoque){
            $this->estoque = $this->estoque - $quantidade;
            echo 'Venda de ' . $quantidade . ' unidade(s) de ' . $this->nome . ' realizada!<br>';
        }else{
            echo 'Estoque insuficiente!';
        }
    }
    public function reajustarPreco($percentual){
        $this->preco = ($percentual/100)*$this->preco;
    }
    public function exibirInfo(){
        echo 'Nome: '. $this->nome . ' | Preço: ' . $this->preco . ' | Estoque: ' . $this->estoque . '<br>'; 
    }
}
$produto = new Produto('Teclado Gamer', 250, 10);
$produto-> vender(2);
$produto-> reajustarPreco(10);
$produto-> exibirInfo();