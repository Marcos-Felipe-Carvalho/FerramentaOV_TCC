<?php

    $respostas = array();

    for($i=1; $i<=10; $i++){
        $respostas[] =  $_POST["tq_".$i];
    }
    
    for($x = 0; $x < count($respostas); $x++) {
        echo $respostas[$x];
        echo "<br>";
      }
