<?php
    $valor = $_POST["valor"];
    $preciofinal = $valor + ($valor * .15);

    echo "Usted debe vender el producto a ".$preciofinal." pesos";

?>