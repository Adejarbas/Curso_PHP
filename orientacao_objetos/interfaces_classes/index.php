<?php

    interface Caracteristicas {

        const nome = "Daniel";

        public function falar();
    }

    class Humano implements Caracteristicas {

        public $maos = 2;
        public $pernas = 2;

        public function falar() {
            echo "O humano está falando... <br>";
        }

        public function mostrarNome() {
            echo "Meu nome é: " . self::nome . "<br>";
        }

    }

    $daniel = new Humano();

    $daniel->falar();

    $daniel->mostrarNome();