<?php

    class Cachorro {

        public $nome;
        public $cor;
        public $patas;

        function __construct($nome, $cor, $patas) {
            $this->nome = $nome;
            $this->cor = $cor;
            $this->patas = $patas;
        }

        function exibirAnimal() {
            echo "O nome do cachorro é: $this->nome, ele/a tem a cor $this->cor, e tem $this->patas <br>";
        }

    }

    $belinha = new Cachorro("Belinha", "Branca", 4);

    $belinha->exibirAnimal();

    $nome = "Perola";
    $cor = "Bege";
    $patas = 4;

    $perola = new Cachorro($nome, $cor, $patas);

    $perola->exibirAnimal();