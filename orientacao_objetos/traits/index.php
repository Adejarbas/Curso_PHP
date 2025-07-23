<?php


    trait Objeto {

        public function teste() {
            echo "Método teste da classe Objeto foi chamado! <br>";
        }

    }

    trait Testando {

        public $y = 10;

        public function traittTeste() {
            echo "Método traitTeste da trait Testando foi chamado! <br>";
        }
    }

    class Central {

        use Objeto;
        use Testando;
    }

    $x = new Central();

    $x->teste();

    $x->traittTeste();

    echo $x->y . "<br>";