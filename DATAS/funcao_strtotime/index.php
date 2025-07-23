<?php

    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");

    echo $dezDias . "<br>";

    $dataAtualMais5 = date("d/m/y", $cincoDias);

    echo $dataAtualMais5 . "<br>";

    $dataATualMais10 = date("d/m/y", $dezDias);

    echo $dataATualMais10 . "<br>";

    $doismeses = strtotime("+2 months");

    echo $doismeses . "<br>";

    $dataAtualMais2Meses = date("d/m/y", $doismeses);

    echo $dataAtualMais2Meses . "<br>";

    echo $dozeanos = strtotime("+12 years");
    echo "<br>";

    echo date("d/m/y", $dozeanos) . "<br>";