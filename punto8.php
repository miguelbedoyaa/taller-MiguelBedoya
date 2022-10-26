<?php
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];

    if(($sexo=="h")&&($edad>63)){
        echo "Usted es ".$sexo." y tiene".$edad." años";
        echo "<br>";
        echo "Se puede jubilar";
    }else{
        if(($sexo=="m")&&($edad>54)){
        echo "Usted es ".$sexo." y tiene".$edad." años";
        echo "<br>";
        echo "se puede jubilar";
         }else{
            echo "Usted es ".$sexo." y tiene".$edad." años";
            echo "<br>";
            echo "No se puede jubilar";
        }
    }
    
    

?>