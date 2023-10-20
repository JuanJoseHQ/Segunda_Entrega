<?php
class Database{

    private $hostname = "localhost";
    private $databse = "spirit_web";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";


    function conectar()
    {
        try{

            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->databse . ";
            charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Exepciones en la conexion
                PDO::ATTR_EMULATE_PREPARES => false //Consultas no emuladas, reales
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            return $pdo;
            
        }catch(PDOException $e){
            echo "Error conexexion" .$e->getMessage();
            exit;
        }
    } 
}


?>