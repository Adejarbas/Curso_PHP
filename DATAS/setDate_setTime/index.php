<?php


   $data = new DateTime();

   print_r($data);
   echo "<br>";

   $data->setDate(2023, 12, 25);

   print_r($data);
    echo "<br>";

   echo $data->format("d/m/Y H:i:s"); 