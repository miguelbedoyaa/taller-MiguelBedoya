<?php
    $capital = $_POST["capital"];
    $interes1 = ($capital * .02);
    $interes2 = ($capital * .045);
    $interes3 = ($capital * .07);
    $capital1 = $capital + $interes1;
    $capital2 = $capital + $interes2;
    $capital3 = $capital + $interes3;

    if($capital<500){
        echo "Su capital con el 2% sera ".$interes1." con un capital ingresado de ".$capital." los intereses ganados seran de ".$capital1;
    }elseif(($capital>=500)&&($capital<1500)){
        echo "Su capital con el 4.5% sera ".$interes2." con un capital ingresado de ".$capital." los intereses ganados seran de ".$capital2;
    }elseif($capital>=1500){
        echo "Su capital con el 7% sera ".$interes3." con un capital ingresado de ".$capital." los intereses ganados seran de ".$capital3;
    }

?>