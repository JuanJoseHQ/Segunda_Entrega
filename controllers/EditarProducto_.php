<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $Id = $_POST['Id'];
    $Nombre = $_POST["Nombre"];
    $Descripcion = $_POST["Descripcion"];
    $Precio = $_POST["Precio"];
    $Cantidad = $_POST["Cantidad"];

    $sql = $con->prepare("UPDATE `producto` 
    SET `Nombre`='$Nombre',`Descripcion`='$Descripcion ',`Precio`='$Precio',`Cantidad`='$Cantidad '
    WHERE `Id` = '$Id'");
    $sql->execute();
    
    if($sql){
        Header("Location: /Spirit_web/Segunda_Entrega/views/layout/Administrador.php");
    }
?>