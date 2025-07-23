<?php


    $arr = [ 'porta' => 100, 'maçaneta' => 5, 'motor' => 2000, 'retrovisor' => 8];

    function itensCaros($arr) {

        $arrItensCaros = [];

        foreach ($arr as $item => $valor) {
            if ($valor > 10) {
                $arrItensCaros[] = $item;
            }
        }

        return $arrItensCaros;
    }

    $novoArr = itensCaros($arr);

    print_r($novoArr);