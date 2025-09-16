<?php

    require_once "connection.php";
    class model extends connection {

        public function consultar(){
            $sql = "SELECT * FROM usuarios";
            $result = $this->mysqli->query($sql);

            while ($row = $result->fetch_assoc()){
                echo "id: ". $row['id']."<br>";
                echo "nombre: ". $row['nombre']."<br>";
                echo "estado: ". $row['estado']."<br>";
                echo "----------------------<br><br>";
            }
        }

        public function eliminar($id){

            $sql = "DELETE FROM usuarios WHERE id = $id";

            try{
                $this->mysqli->query($sql);
                echo "Usuario eliminado con exito.<br><br>";
            }
            catch (Exception $e){
                echo "No se pudo eliminar ".$e->getMessage();
            }
        }

        public function update($id){

            $sql = "UPDATE usuarios SET estado = 2 WHERE id = $id";

            try{
                $this->mysqli->query($sql);
                echo "Usuario updateado con exito.<br><br>";
            }
            catch (Exception $e){
                echo "No se pudo updatear ".$e->getMessage();
            }
        }
        public function insert($id){

            $sql = "INSERT INTO usuarios (nombre, estado) VALUES ('Lautaro', '1')";

            try{
                $this->mysqli->query($sql);
                echo "Usuario updateado con exito.<br><br>";
            }
            catch (Exception $e){
                echo "No se pudo updatear ".$e->getMessage();
            }
        }




    }

    $model = new model();
    $model->eliminar(1);
    $model->consultar();