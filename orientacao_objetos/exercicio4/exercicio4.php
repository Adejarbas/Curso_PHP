<?php

    class Carro {

        public $marca;
        public $modelo;
        public $cor;
        public $velocidadeMaxima;
        
        function setVelocidadeMaxima($velocidade) {
            $this->velocidadeMaxima = $velocidade;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade máxima do carro é: $this->velocidadeMaxima km/h <br>";
        }
    }

    $bmw = new Carro();

    $bmw->marca = "BMW";
    $bmw->modelo = "X5";
    $bmw->cor = "Preto";

    $bmw->setVelocidadeMaxima(250);

    $bmw->getVelocidadeMaxima();

    $ferrari = new Carro();

    $ferrari->setVelocidadeMaxima(400);

    $ferrari->getVelocidadeMaxima();