<?php

    class Car {

        public $portas;
        public $cor;
        public $marca;


        function __construct($portas, $cor, $marca) {
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    $ferarri = new Car(2, "Vermelho", "Ferrari");

    echo "O carro é uma $ferarri->marca, tem $ferarri->portas portas e é da cor $ferarri->cor.<br>";

    $bmw = new Car(4, "Preto", "BMW");

    echo "O carro é uma $bmw->marca, tem $bmw->portas portas e é da cor $bmw->cor.<br>";