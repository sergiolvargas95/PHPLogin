<?php
    class connection {
        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $connection;

        public function __construct(){
            try {
                //instancia para la conexión a la base de datos
                $this -> connection = new PDO("mysql:host=$this->server;dbname=login",$this->user,$this->password);
                $this -> connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                return "falla de conexión".$e;
            }
        }

        public function ejecutar($sql) {
            $this -> connection -> exec($sql);
            return $this -> connection -> lastInsertId();
        }

        public function consultar($sql) {
            $sentencia = $this -> connection -> prepare($sql);
            $sentencia -> execute();
            return $sentencia -> fetchAll();
        }
    }
?>