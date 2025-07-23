<?php

    class Pessoa {

        public $nome;
        public $idade;
        public $altura = 1.75;

        function andar($m) {
            echo "A Está Andando por $m... <br>";
        }
    }

    $daniel = new Pessoa();

    $daniel->nome = "Daniel";
    $daniel->idade = 30;
    $daniel->andar(30);

    echo $daniel->nome . "<br>";
    echo $daniel->idade . "<br>";
    echo $daniel->altura . "<br>";

    echo "O nome dele é $daniel->nome, ele tem $daniel->idade anos e sua altura é $daniel->altura metros..<br>";