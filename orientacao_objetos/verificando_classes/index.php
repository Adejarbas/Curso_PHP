<?php

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar() {
            echo "O humano está falando... <br>";
        }

        public function trabalhar() {
            echo "O humano está trabalhando... <br>";
        }

    }

    if(class_exists("Humano")) {
        echo "A classe Humano existe! <br>";
    } else {
        echo "A classe Humano não existe! <br>";
    }

    if(class_exists("Animal")) {
        echo "A classe Animal existe! <br>";
    } else {
        echo "A classe Animal não existe! <br>";
    }

    print_r(get_class_vars("Humano"));
    print_r(get_class_methods("Humano"));

