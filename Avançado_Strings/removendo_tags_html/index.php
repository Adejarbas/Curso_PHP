<?php

    $textoHTML = "<h1>Olá, Mundo!</h1><p>Este é um parágrafo.</p><div>Uma div com <strong>texto em negrito</strong>.</div>";

    echo $textoHTML . "<br>";

    // Removendo tags HTML
    $salvarTextoBanco = strip_tags($textoHTML);

    echo $salvarTextoBanco . "<br>";