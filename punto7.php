<?php
    $nombre = $_POST["nombre"];
    $asigntura = $_POST["asignatura"];
    $final = $_POST["final"];

    if($final<7){
        echo "El estudiante reprobó ".$asigntura;
    }else{
        echo "El estudiante aprobó ".$asigntura;
    }


?>