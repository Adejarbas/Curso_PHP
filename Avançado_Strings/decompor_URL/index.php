<?php


    $url = "https://www.exemplo.com.br/cursos/php/avancado?curso=php&nivel=avancado#topo";

    // Decompondo a URL
    $partesUrl = parse_url($url);

    print_r($partesUrl);

    echo "Esquema: " . $partesUrl['scheme'] . "<br>";
    echo "Host: " . $partesUrl['host'] . "<br>";
    echo "Caminho: " . $partesUrl['path'] . "<br>";
    echo "Consulta: " . $partesUrl['query'] . "<br>";
    echo "Fragmento: " . $partesUrl['fragment'] . "<br>";