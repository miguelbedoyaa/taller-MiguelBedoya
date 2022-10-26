<?php
    $h1 = $_POST["h1"];
    $h2 = $_POST["h2"];
    $d = $h1 - $h2;
    
    echo "El hermano 1 tiene ".$h1." años"." / ";
    echo "El hermano 2 tiene ".$h2." años";

    if($h1>$h2){
        echo "El hermano 1 es mayor que el hermano 2 y le lleva una diferencia de ".$d." años" ;
    }else{
        echo "El hermano 2 es mayor que el hermano 1 y le lleva una diferencia de ".$d." años" ;
    };


?>