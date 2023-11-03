<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $Id = $_POST["Id"];
    $Rol = $_POST["Rol"];
    $Email = $_POST["Email"];
    $Contrasena = $_POST["Contrasena"];

    $sql = $con->prepare("UPDATE `usuario` 
    SET `Id`='$Id', `Rol`='$Rol', `Email`='$Email', `Contrasena`='$Contrasena'
    WHERE `Id` = '$Id'");
    $sql->execute();
    
    if($sql){
        Header("Location: /Spirit_web/Segunda_Entrega/views/layout/Administrador.php");
    }
?>