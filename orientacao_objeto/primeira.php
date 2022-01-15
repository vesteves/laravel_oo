<?php

class Pessoa {
    // aqui ponho os ATRIBUTOS
    public $nome = "vitor";
    public $idade = "35";


    // aqui ponho os MÉTODOS
    public function correr() {
        $this->validacao();
        return $this->nome . " está correndo";
    }

    public function andar() {
        return $this->nome . " está andando";
    }

    public function validacao() {
        // fazer uma leitura do nome;
        // se o nome da pessoa começar com a letra v, a pessoa não poderá correr.
    }
}

$pessoa1 = new Pessoa();

// $pessoa1->nome = "Dandara";
// echo $pessoa1->nome;

$pessoa2 = new Pessoa();
// $pessoa2->nome = "Raph";
echo "Aluno: " . $pessoa1->andar();
echo "<br>";
echo "Aluno " . $pessoa2->andar();
echo "<br>";
echo "<br>";