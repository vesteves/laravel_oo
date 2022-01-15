<?php

class Pessoa {
    // aqui ponho os ATRIBUTOS
    private $nome;
    private $idade;

    // aqui ponho os MÉTODOS
    public function correr() {
        $validacao = $this->validacao();
        if ($validacao) {
            echo $validacao;
            echo "<br />";
            return;
        }
        
        return $this->nome . " está correndo";
    }

    public function andar() {
        return $this->nome . " está andando";
    }

    public function validacao() {
        // fazer uma leitura do nome;
        // se o nome da pessoa começar com a letra v, a pessoa não poderá correr.
        if(empty($this->nome)) {
            return "informe um nome de pessoa";
        }

        echo "validando o nome " . $this->nome;
        echo "<br />";

        if (strtoupper($this->nome[0]) == "V") {
            return $this->nome . " não pode correr";
        }
    }

    // método responsável em pegar informação de dentro da classe
    public function getNome(){
        return $this->nome;
    }

    // método responsável em atribuir um dado externo para ser usado internamente na classe
    public function setNome($nome){
        $this->nome = $nome;
    }
}

// instanciando a pessoa 1
// criando um registro de Pessoa
$pessoa1 = new Pessoa();
$pessoa1->setNome("Dandara");
echo $pessoa1->getNome();

echo "<br />";

$pessoa2 = new Pessoa();
$pessoa2->setNome("Leo");
echo $pessoa2->getNome();