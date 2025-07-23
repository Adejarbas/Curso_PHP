<?php

 $carro = [
    'marca' => "Toyota",
    'modelo' => "Corolla",
    'ano' => 2020,
    'cor' => "Preto",
    'preco' => 95000.00,
    'adicionais' => ["Ar-condicionado", "Direção hidráulica", "Airbags", "Rodas de liga leve"],
 ];

 $marca = $carro['marca'];
 $velocidade_maxima = $carro['velocidade_maxima'] = 180;

  echo "O carro é da marca $carro[marca] e atinge a velocidade máxima de $velocidade_maxima km/h";

  print_r($carro);
  echo "<br>";
  echo $carro['adicionais'][0];
  echo "<br>";
  echo $carro['adicionais'][1];
  echo "<br>";
  echo $carro['adicionais'][2];
  echo "<br>";
  echo $carro['adicionais'][3];
  echo "<br>";
  echo $carro['velocidade_maxima'];
  echo "<br>";


  echo "O meu carro é um $carro[modelo] da marca $carro[marca] do ano $carro[ano] e comprei na cor $carro[cor] paguei nele $carro[preco]";

  echo "<br>";

  if(is_float($carro['preco'])) {
    echo " É UM FLOAT";
  } else {
    echo " NÃO É UM FLOAT";}