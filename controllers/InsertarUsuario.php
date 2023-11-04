<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $Id = null;
    $Rol = 2;
    $Email = $_POST["Email"];
    $contrasena = $_POST["contrasena"];

    $sql = $con->prepare("SELECT * FROM usuario WHERE Email = :email");
    $sql->bindParam(':email', $Email);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($resultado == false) {
        $sql = $con->prepare("INSERT INTO `usuario`(`Id`, `Rol`, `Email`, `Contrasena`) VALUES 
        ('$Id','$Rol','$Email','$contrasena ')");
        $sql->execute();
    
        if($sql && isset($_POST['confirm'])){
            Header("Location: /Spirit_web/Segunda_Entrega/views/Inicio.php");
        }else{
            if($sql){
            Header("Location: /Spirit_web/Segunda_Entrega/views/Administrador.php");
            }
        }
    }else{
        if(isset($_POST['confirm'])){
            Header("Location: /Spirit_web/Segunda_Entrega/views/Registro.php");
        }else{
            Header("Location: /Spirit_web/Segunda_Entrega/views/Administrador.php");
        }
    }



   
    
?>