<?php

    class Pessoa {

        function falar(){
            echo "Olá, tudo bem? <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }
    }

    $daniel = new Pessoa();

    $daniel->falar();

    $joao = new Pessoa();

    $joao->falar();

    $daniel->somar(10, 20);
    $joao->somar(5, 15);