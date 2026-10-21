<?php

Class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario =(1000)){
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function aumentarSalario($percentual){
        if($percentual > 0 && $percentual < 11){
            $this->salario = [($percentual/100)*$this->salario]+$this->salario;
        }else{
            echo 'Valor não permitido!';
        }
    }
    public function exibirSalario(){
        echo 'Nome: '. $this->nome . ' | Salário: ' . $this->salario . '<br>';
    }
}
$func = new Funcionario('Carlos', 3000);
$func->aumentarSalario(10);
$func->exibirSalario();
