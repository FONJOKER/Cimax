<?php 
    class Conexion{ 
        public static function conectar(){ 
            // session_start();
            $servidor = "localhost"; // Servidor donde se encuentra MySQL
            $bd   = "cimax"; // Nombre de la base de datos
            $usuario = "root"; // Usuario de conexión a MySQL
            $password = ""; // Contraseña del usuario

            $conexion_pdo = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8", $usuario, $password);
            if (!$conexion_pdo ){ 
                echo "Error, no se pudo hacer la conexi�n...";
                exit; 
            }
            return $conexion_pdo;
        }
    } 
