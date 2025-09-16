<?php

    class connection {

        private $host = "mariadb-server";
        private $username = "root";
        private $password = "root";
        private $database = "AP1";
        protected $mysqli;

        public function __construct() {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            try {
                $this->mysqli = new mysqli(
                    $this->host,
                    $this->username,
                    $this->password,
                    $this->database
                );
                echo "Conexión exitosa";
            } catch (mysqli_sql_exception $e) {
                echo "Error de conexión: " . $e->getMessage();
            }
        }

        public function close() {
            if ($this->mysqli) {
                $this->mysqli->close();
            }
        }
    }

?>
