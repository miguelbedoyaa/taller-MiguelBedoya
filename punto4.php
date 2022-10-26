<?php
    $horas = $_POST["horas"];
    $valor = $_POST["valor"];
    $sueldo = $horas * $valor;

    echo "usted ha trabajado ".$horas." horas en el mes ";
    echo "que cada una tiene un valor de ".$valor." "; 
    echo "su sueldo es de ".$sueldo;

?>