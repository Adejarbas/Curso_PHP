<?php

    print_r($_SERVER);

    echo "<br><br>";

    echo $_SERVER['MySQL_HOME'] . "<br>";

    if($_SERVER['Server_name'] == 'localhost') {
        echo "esta rodando no localhost.";
    } 
    