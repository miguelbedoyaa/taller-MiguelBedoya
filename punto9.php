<?php
    $nombre = $_POST["nombre"];
    $asignatura = $_POST["asignatura"];
    $e1 = $_POST["exa1"];
    $e2 = $_POST["exa2"];
    $e3 = $_POST["exa3"];
    $porcentaje1 = $e1 * .3;
    $porcentaje2 = $e2 * .3;
    $porcentaje3 = $e3 * .4;
    $total= $porcentaje1 + $porcentaje2 + $porcentaje3;

    if($total>4){
        echo "Su promedio es de ".$total." / Usted aprobó ".$asignatura;
    }
    else{
        echo "Su promedio es de ".$total." / Usted reprobó ".$asignatura;
    }

?>

