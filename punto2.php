<?php
    $nombre = $_POST["nombre"];
    $asignatura = $_POST["asignatura"];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $suma = $nota1 + $nota2 + $nota3;
    $promedio = $suma/3;
    
    echo "notas del estudiante ".$nombre;
    echo $asignatura." = ".$nota1." ".$nota2. " ".$nota3." promedio de ".$promedio;
?>