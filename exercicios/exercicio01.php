<?php

Class Livro{
    public string $titulo;
    public string $autor;
    public int $qtd_paginas;
    public string $ano_publicacao;

    public function __construct($titulo, $autor, $qtd_paginas, $ano_publicacao = ('Desconhecido')){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->qtd_paginas = $qtd_paginas;
        $this->ano_publicacao = $ano_publicacao;
    }
    public function exibirDetalhes(){
        echo "Titulo: ".$this->titulo . "| Autor: ". $this->autor. "| Quantidade de Páginas: ". $this->qtd_paginas. "| Ano de Publicação: ". $this->ano_publicacao;
    }
}
$livro1 = new Livro('Memórias Póstumas','Machado de Assis',200);
$livro2 = new Livro('Dom Casmurro','Machado de Assis',210,1840);

$livro1->exibirDetalhes();
echo '<br>';
$livro2->exibirDetalhes();