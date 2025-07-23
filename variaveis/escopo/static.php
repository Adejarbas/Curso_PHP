<?php

function teste() {

    $a = 0;
    $a++;

    echo "$a <br>"; // 1
}

teste();
teste();
teste();


function testeStatic() {

    static $a = 0;
    $a++;

    echo "$a <br>"; // 1
}

testeStatic();
testeStatic();
testeStatic();