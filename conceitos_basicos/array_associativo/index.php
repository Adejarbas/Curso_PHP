<?php

$arr = [
    'nome' => "Daniel",
    "idadde" => 30,
    "cidade" => "Votorantim",
    "estado" => "SP",
    "altura" => 1.75,
    "hobbies" => ["programar", "jogar", "assistir filmes"],
    "ativo" => true,
];

echo $arr['nome'] . "<br>";
echo $arr['idadde'] . "<br>";
echo $arr['cidade'] . "<br>";

print_r($arr);
echo "<br>";
print_r($arr['hobbies']);
echo "<br>";

