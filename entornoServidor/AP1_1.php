<?php

    $variable = $_GET;
    foreach ($variable as $key => $value) {
        echo "Se ha recibido la clave " .$key . " para el valor: " . $value . "<br>";
    }

?>