<?php

$variable = $_GET;
foreach ($variable as $key => $value) {
    if (is_numeric($value)){
        echo "Se ha recibido un numero <br>";
    }
    elseif (is_string($value) && ($value != "")){
        echo "Se ha recibido una string <br>";
    }
    else{
        echo "No se ha recibido ningun dato o es nulo<br>";
    }
}

?>