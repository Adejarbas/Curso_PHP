<?php

    abstract class teste {

        public static function testandoClasse() {
            echo "Método testandoClasse da classe abstrata foi chamado! <br>";
        }

        abstract public function testeAbs();

    }

    // $t = new teste(); // Não é possível instanciar uma classe abstrata


    Teste::testandoClasse(); // Chamada do método estático da classe abstrata

    class Nova extends teste {

        public function testeAbs() {
            echo "Método testeAbs da classe Nova foi chamado! <br>";
        }

    }

    $n = new Nova();

    $n->testeAbs(); // Chamada do método implementado na classe Nova