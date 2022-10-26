<?php
// condicionales
    $n1 = 15;    
    $n2 = 6;
    $n3 = 20;

    /* == comparar igualdad
    < menor que
    > mayor que
    <= menor o igual que
    => mayor o igual que

    operadores de anidación 
    && significa y
    or significa ó
    */

    if($n1==$n2==$n3){
        echo "los valores son iguales";
    }elseif($n1<$n2){
        echo "el valor ".$n1." es menor que ".$n2; 
    }else{
        echo "el valor ".$n1." es mayor que ".$n2; 
    };