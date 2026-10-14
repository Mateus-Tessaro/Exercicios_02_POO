<?php

Class Aluno{
    public string $nome;
    public int $nota1;
    public int $nota2;
    public float $media;

    public function __construct($nome,$nota1,$nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }
    public function calcularMedia(){
        return ($this->nota1 + $this->nota2)/2;
    }
}
$aluno = new Aluno('Mateus',10,9);

echo '<pre>';
print_r($aluno);
echo '</pre>';