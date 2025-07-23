<?php


    class Car {

        public $rodas = 4;
        private $vidro = "sem pelicula";
        protected $portas = 4;

        public function peliculaDeFabrica($pelicula) {
            $this->vidro = $pelicula;
        }

        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }
    }

    class Mecanico {

        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car();

    echo $carro->rodas . "<br>";

    $daniel = new Mecanico();

    $daniel->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    // Não pode alterar por que é private
    //$daniel->colocarPelicula($carro, "pelicula escura");

    //$carro->peliculaDeFabrica("pelicula escura");

    echo $carro->getVidro() . "<br>";

    //echo $carro->portas . "<br>"; // protected, não pode acessar diretamente

    echo $carro->getPortas() . "<br>"; // protected, pode acessar através de um método público