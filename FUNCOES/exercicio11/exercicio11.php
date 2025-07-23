<?php

  $lista = ["Arroz", "Feijão", "Macarrão", "Carne", "Frango"];

  function listaParaString($arr) {

    $str = "Você levou os seguintes itens: ";

    for( $i = 0; $i < count($arr); $i++) {

      if ($i + 1 == count($arr) - 1) {
        $str .= "$arr[$i], ";
      } else {
        $str .= "$arr[$i]. ";
      }

    }

    return $str;

  }

  echo listaParaString($lista);