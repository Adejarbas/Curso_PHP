<?php

 $pessoa = [
    'nome' => "Daniel",
    'idade' => 30,
    'altura' => 1.75,
    'peso' => 60,
    'CPF' => "123.456.789-00",
    'enderecos' => [
        "Rua Setem de setembro, 140",
        "Parque Bela Vista",
        "Votorantim, SP"
    ],
    'profissao' => "Programador",
    'hobbies' => ["Ler", "Programar", "Jogar"]
];

  if($pessoa['idade'] >= 18) {
    echo "A pessoa é maior de idade.";
  } else {
    echo "A pessoa é menor de idade.";
  };

  echo "<br>";


$Idoso = 60;

if($pessoa['idade'] >= $Idoso) {
    echo "A pessoa é acima dos 60, então é um idoso.";
} else {
    echo "A pessoa não é um idoso."; }