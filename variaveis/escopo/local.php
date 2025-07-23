<?php

$x = 10; 

echo "$x Global <br>"; // 10

function teste() {
    $x = 20; // variável local
    echo "$x Local <br>"; // 20
}

teste();

function teste2() {
    $x = 100;

    echo "$x Local 2 <br>"; // 10
}

$x = 50; // variável global

echo "<br>";

echo "$x";
echo "<br>";

teste();
echo "<br>";
teste2();