<?php

    $data = new DateTime();

    echo $data->format("d/m/Y H:i:s") . "<br>";

    echo $data->format("D - M - Y") . "<br>";

    $data->modify(" +5 days");

    echo $data->format("d/m/Y H:i:s") . "<br>";

    $data->modify(" -7 days");

    echo $data->format("d/m/Y H:i:s") . "<br>";