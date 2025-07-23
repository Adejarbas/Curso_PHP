<?php

    class Car {

        public $rodas;
        public $aro = 20;
        public $cor = "vermelho";

        function ligar() {
            echo "Vrum Vrum! <br>";
        }
    }

    $ferrari = new Car();

    $ferrari->rodas = 4;

    echo $ferrari->aro .  "<br>";
    echo $ferrari->rodas .  "<br>";

    $ferrari->cor = "azul";

    echo $ferrari->cor .  "<br>";

    $ferrari->ligar();