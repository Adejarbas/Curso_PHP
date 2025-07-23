<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2026, 12, 25);
    $dataC->setDate(2026, 12, 25);

    $dataB->setTime(12, 0, 0);
    $dataC->setTime(12, 0, 0);

    if($dataB > $dataA) {
        echo "A data B é maior que a data A <br>";
    }

    if($dataA < $dataB) {
        echo "A data A é menor que a data B <br>";
    }

    if($dataA == $dataC) {
        echo "As datas são iguais <br>";
    } else {
        echo "As datas são diferentes <br>";
    }

    if($dataB == $dataC) {
        echo "As datas B e C são iguais <br>";
    } else {
        echo "As datas B e C são diferentes <br>";
    }