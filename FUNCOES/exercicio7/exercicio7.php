<?php


    $array = [];


    for ($i = 0; $i <= 30; $i++) {
       
        array_push($array, $i);
        
    }

    // print_r($array);


    function ArrayMaiorQueSete($arr) {

        $arrayReturn = [];

        for ($j = 0; $j < count($arr); $j++) {
            
            if ($arr[$j] > 7) {
                array_push($arrayReturn, $arr[$j]);
            }
        }

        return $arrayReturn;

    }

    $novoArray = ArrayMaiorQueSete($array);

    print_r($novoArray);