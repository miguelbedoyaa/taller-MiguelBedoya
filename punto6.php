<?php
    $volantes = $_POST["volantes"];
    $posters = $_POST["posters"];
    $tarjetas = $_POST["tarjetas"];
    $comprav = $volantes * 2000;
    $comprap = $posters * 5000;
    $comprat = $volantes * 500;
    $pagototal = $comprav + $comprap + $comprat;

    echo "Compra de ".$volantes." volantes"." / ";
    echo "Compra de ".$posters." posters"." / ";
    echo "Compra de ".$tarjetas." tarjetas"." / ";
    echo "Total a pagar de ".$pagototal." pesos";

?>