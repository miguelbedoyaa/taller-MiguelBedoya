<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"]; 
    $n3 = $_POST["n3"];

    if(($n1>$n2)&&($n1>$n3)){
        echo "El numero ".$n1."es mayor que".$n2."y ".$n3;
    }elseif(($n1>$n2)&&($n3>$n1)){
        echo "El numero ".$n3."es mayor que".$n1."y ".$n2;
    }elseif(($n2>$n1)&&($n2>$n3)){
        echo "El numero ".$n2."es mayor que".$n1."y ".$n3;
    }elseif(($n3>$n1)&&($n3>$n2)){
        echo "El numero ".$n3."es mayor que".$n1."y ".$n2;
    }
?>