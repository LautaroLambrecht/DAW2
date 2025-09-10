<?php

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET["valor"]) && isset($_GET["clave"])){
        echo ("Se ha recibido ".$_GET["valor"]." para la clave ".$_GET["clave"]);
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi página</title>
</head>
<body>
<form action="" method="get">
    <label for="clave">clave</label>
    <input type="text" name="clave">
    <label for="valor">valor</label>
    <input type="text" name="valor">
    <button type="submit">Enviar</button>
</form>
</body>
</html>