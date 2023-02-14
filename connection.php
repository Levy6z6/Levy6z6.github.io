<?php
    class DB{
        function conexion(){
            $host = 'localhost';
            $dbname = 'muebles';
            $user = 'root';
            $pass = '';

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
            } catch (PDOException $e) {
                echo "No se pudo conectar ".$e;
                die();
            }
            return $conn;
        }
    }


?>