<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);


    $q = "SELECT * FROM usuarios";

        $result = $conn->query($q);

    $conn->close();
    

    // Um resultado
    $usuario = $result->fetch_assoc();

    print_r($usuario);

    // Vários resultados
    $usuarios = $result->fetch_all();

    print_r($usuarios);