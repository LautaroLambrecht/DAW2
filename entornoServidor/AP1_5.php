<?php

    $host = "mariadb-server";
    $username = 'root';
    $password = 'root';
    $database = 'AP1';

    try{
        $mysqli = new mysqli($host, $username,$password, $database);
        echo "Conexion exitosa";
    }
    catch (mysqli_sql_exception $e){
        echo "Error de conexion ".$e->getMessage();
    }

    $sql = "SELECT * FROM usuarios";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "id: ". $row['id']."<br>";
        echo "nombre: ". $row['nombre']."<br>";
        echo "estado: ". $row['estado']."<br>";
        echo "----------------------<br><br>";
    }

    $sql = "DELETE FROM usuarios WHERE nombre = 'Lautaro'";

    try{
        $mysqli->query($sql);
        echo "Usuario eliminado con exito.<br><br>";
    }
    catch (Exception $e){
        echo "No se pudo eliminar ".$e->getMessage();
    }

    $sql = "INSERT INTO usuarios (nombre, estado) VALUES
            ('Lautaro', '1')";

    try{
        $mysqli->query($sql);
        echo "Usuario agregado con exito.<br><br>";
    }
    catch (Exception $e){
        echo "No se pudo agregar ".$e->getMessage();
    }

    $sql = "SELECT * FROM usuarios";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "id: ". $row['id']."<br>";
        echo "nombre: ". $row['nombre']."<br>";
        echo "estado: ". $row['estado']."<br>";
        echo "----------------------<br><br>";
    }


    $sql = "UPDATE usuarios SET estado = 2 WHERE nombre = 'Lautaro'";

    try{
        $mysqli->query($sql);
        echo "Usuario actualizado con exito.<br><br>";
    }
    catch (Exception $e){
        echo "No se pudo actualizar ".$e->getMessage();
    }


    $sql = "SELECT * FROM usuarios";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "id: ". $row['id']."<br>";
        echo "nombre: ". $row['nombre']."<br>";
        echo "estado: ". $row['estado']."<br>";
        echo "----------------------<br><br>";
    }

    $sql = "DELETE FROM usuarios WHERE nombre = 'Lautaro'";

    try{
        $mysqli->query($sql);
        echo "Usuario eliminado con exito.<br><br>";
    }
    catch (Exception $e){
        echo "No se pudo eliminar ".$e->getMessage();
    }

    $sql = "SELECT * FROM usuarios";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "id: ". $row['id']."<br>";
        echo "nombre: ". $row['nombre']."<br>";
        echo "estado: ". $row['estado']."<br>";
        echo "----------------------<br><br>";
    }

    $mysqli->close();