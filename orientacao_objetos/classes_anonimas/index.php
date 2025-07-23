<?php

    $pessoa = new class {

        public $nome = "Daniel";

        public function dizerNome() {
            echo "Meu nome é: $this->nome <br>";
        }

    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();