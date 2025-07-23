<?php

    class Humano {

        public function falar() {
            echo "OLÁ MUNDO! <br>";
        }
    }

    $daniel = new Humano();

    $teste = 10;

    if(is_object($daniel)) {
        echo "É um objeto! <br>";
    } else {
        echo "Não é um objeto! <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto! <br>";
    } else {
        echo "Não é um objeto! <br>";
    }

    echo get_class($daniel) . "<br>";

    if(method_exists($daniel, "falar")) {
        echo "O método falar existe! <br>";
    } else {
        echo "O método falar não existe! <br>";
    }

    if(method_exists($daniel, "asd")) {
        echo "O método asd existe! <br>";
    } else {
        echo "O método asd não existe! <br>";
    }