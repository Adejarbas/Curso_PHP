<?php

    $arr = [ "jaguar", 3.0, "Azul", 18, "teto solar", "automatico"];

    list($marca, $potencia, $cor, $rodas, $acessorio, $cambio) = $arr;  // Desestruturação do array

    echo  "$marca <br>";
    echo  "$potencia <br>";
    echo  "$cor <br>";
    echo  "$rodas <br>";
    echo  "$acessorio <br>";
    echo  "$cambio <br>";

    print_r($arr);        