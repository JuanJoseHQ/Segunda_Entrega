<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $Id = $_GET['Id'];
    $sql = $con->prepare("DELETE FROM `producto` WHERE Id = '$Id'");
    $sql->execute();
    if($sql){
        Header("Location: /Spirit_web/Segunda_Entrega/views/Administrador.php");
    }
?>