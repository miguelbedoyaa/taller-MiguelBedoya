<?php
    $pago = $_POST["pago"];
    $descuento = $pago - ($pago * .2);

    if($pago<20000){
        echo "Usted debe pagar ".$pago;
    }else{
        echo "Usted debe pagar ".$descuento;
    }

?>