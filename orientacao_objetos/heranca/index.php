<?php

    class Humano {

        public $idade = 30;

        public function falar() {
            echo "O humano está falando... <br>";
        }

        private function gritar() {
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessarGrito() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "PHP é muito bom... baixinho <br>";
        }

        public function acessaFalarBaixinho() {
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {

    }

    $ze = new Humano();

    $ze->falar();
    $ze->acessarGrito();
    //$ze->falarBaixinho(); // Não pode acessar diretamente, é protected
    $ze->acessaFalarBaixinho(); // Pode acessar através de um método público

    $daniel = new Programador();

    echo $daniel->idade . "<br>";
    $daniel->falar();
    $daniel->acessarGrito();
    $daniel->acessaFalarBaixinho(); // Pode acessar o método protegido através de um método público