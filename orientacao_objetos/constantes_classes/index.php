<?php

    class Humano {

        public const OLHOS = 2;
        public const BRAÇOS = 2;
        public const PERNAS = 2;
        public const DEDOS = 10;

        function mostrarConstantes() {
            echo self::DEDOS . "<br>";

            echo self::OLHOS . "<br>";
        }

        
    }

    $daniel = new Humano();

    echo $daniel::OLHOS . "<br>";
    echo $daniel::BRAÇOS . "<br>";
    echo $daniel::PERNAS . "<br>";

    $daniel->mostrarConstantes();