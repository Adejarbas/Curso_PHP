<?php

    class Cachorro {

        function latir() {
            echo "Au Au Au! <br>";
        }

        function andar($m) {
            echo "O cachorro está andando por $m! <br>";
        }
    }

    $rex = new Cachorro();

    $rex->latir();
    $rex->andar(1000);

    $toto = new Cachorro();

    $toto->latir();
    $toto->andar(120);