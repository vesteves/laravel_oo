<?php

class Pessoa {
    // aqui ponho os ATRIBUTOS
    private $nome;
    private $idade;
    private $sexo;
    private $estado;
    private $cidade;
    
    // public e depois como privado
    // sexo
    // estado
    // cidade

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

        if ($this->nome[0] == "V") {
            return $this->nome . " não pode correr";
        }
    }

    // método responsável em pegar informação de dentro da classe
    public function getNome(){
        $nome = strtoupper($this->nome);
        return $nome;
    }

    // método responsável em atribuir um dado externo para ser usado internamente na classe
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
}

// instanciando a pessoa 1
// criando um registro de Pessoa
$pessoa1 = new Pessoa();
$pessoa1->setNome("Vitor");
$pessoa1->setEstado("Rio de Janeiro");
$pessoa1->setCidade("RJ");

echo $pessoa1->correr();
echo "<br />";
echo $pessoa1->getNome();

/*
echo $pessoa1->getNome();
echo "<br />";
echo $pessoa1->getCidade();
echo "<br />";
echo $pessoa1->getEstado();
echo "<br />";

echo "<br />";

$pessoa2 = new Pessoa();
$pessoa2->setNome("Leo");
echo $pessoa2->getNome();
*/