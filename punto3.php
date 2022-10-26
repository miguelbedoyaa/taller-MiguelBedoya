<?php
    $nombre = $_POST["nombre"];
    $ganados = $_POST["ganados"];
    $empatados = $_POST["empatados"];
    $perdidos = $_POST["perdidos"];
    $pg = $ganados *3;
    $pe = $empatados *1;
    $pp = $perdidos * 0;
    $puntos = $pg + $pe + $pp;

    echo "el equipo ".$nombre." ";
    echo "ha ganado ".$ganados." "." partidos"." / ";
    echo "ha empatado ".$empatados." "." partidos"." / ";
    echo "ha perdido ".$perdidos." "." partidos"." / ";
    echo "y tiene un total de ".$puntos." puntos"; 
?>