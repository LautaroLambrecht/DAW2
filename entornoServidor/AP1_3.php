<?php

    $impar = false;
    $par = false;
    $suma = 0;
    $pos = 0;

    $datos = [
        1 => "primero",
        3 => "segundo",
        5 => "tercero",
        7 => "cuarto",
        9 => "quinto",
        11 => "sexto",
    ];

    foreach ($datos as $key => $value) {
        if ($pos % 2 == 0) {
            $par = true;
            echo "Estas en una posicion par<br>";
        }
        else echo "Estas en una posicion impar<br>";
        $suma += $key;
        $pos++;
    }

    if ($suma > 15){
        echo "El valor es mayor que 15";
    }
    elseif ($suma > 10){
        echo "El valor es mayor que 10";
    }
    else echo "El valor es mayor que 5";

?>