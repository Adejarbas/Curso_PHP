<?php



    // Certo

  function compararNumeros($numero1, $numero2) {
        if ($numero1 > $numero2) {
            return "O primeiro número é maior.";
        } elseif ($numero2 > $numero1) {
            return "O segundo número é maior.";
        } else {
            return "Os números são iguais.";
        }
    }

    // Testando a função:
    echo compararNumeros(10, 5) . "<br>";    // O primeiro número é maior.
    echo compararNumeros(3, 8) . "<br>";     // O segundo número é maior.
    echo compararNumeros(7, 7) . "<br>";     // Os números são iguais.

?>