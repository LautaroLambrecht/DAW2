<?php

    function triangulo($base, $altura){
        return ($base*$altura)/2;
    }

    function rectangulo($base, $altura){
        return $base*$altura;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($_POST['funcion'] == 'triangulo'){
            echo triangulo($_POST['base'], $_POST['altura']);
        }
        elseif ($_POST['funcion'] == 'circulo'){
            echo "es un circulo";
        }
        else echo rectangulo($_POST['base'], $_POST['altura']);
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="funcion"></label>
        <select name="funcion" id="funcion">
            <option value="triangulo">Triangulo</option>
            <option value="rectangulo">Rectangulo</option>
            <option value="circulo">Circulo</option>
        </select>
        <label for='base'></label>
        <input type='number' name='base' placeholder='base'>
        <label for='altura'></label>
        <input type='number' name='altura' placeholder='altura'>
        <button type="submit">Calcular!</button>
        </form>
</body>
</html>