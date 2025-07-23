<?php

    class Humano {

        public $maos = 2;
        public $pernas = 2;

        public function falar() {
            echo "O humano está falando... <br>";
        }

    }

    class Professor extends Humano {
         public $disciplinas = "Matematica";

         public function estaLecionando() {
            echo "O professor está dando aula de $this->disciplinas... <br>";
         }
    }

    $marcos = new Humano();

    echo "$marcos->maos <br>";
    $marcos->falar();

    $joao = new Professor();

    echo "$joao->pernas <br>";
    echo "$joao->disciplinas <br>";

    $joao->falar();

    $joao->estaLecionando();