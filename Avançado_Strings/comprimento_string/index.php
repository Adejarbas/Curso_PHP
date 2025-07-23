<?php

$str = "Esta string é muito grande";
$str2 = "está não";

echo strlen($str) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str);
$len2 = strlen($str2);

if($len1 > $len2) {
    echo "A string 1 é maior que a string 2 <br>";
} elseif($len1 < $len2) {
    echo "A string 2 é maior que a string 1 <br>";
} else {
    echo "As duas strings tem o mesmo tamanho <br>";
}