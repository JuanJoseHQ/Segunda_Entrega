<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $Id = null;
    $Nombre = $_POST["Nombre"];
    $Descripcion = $_POST["Descripcion"];
    $Precio = $_POST["Precio"];
    $Cantidad = $_POST["Cantidad"];

    $sql = $con->prepare("INSERT INTO `producto`(`Id`, `Nombre`, `Descripcion`, `Precio`, `Cantidad`) VALUES 
        ('$Id','$Nombre','$Descripcion','$Precio','$Cantidad ')");
    $sql->execute();
    
    if($sql){
        Header("Location: /Spirit_web/Segunda_Entrega/views/Administrador.php");
    }
?>