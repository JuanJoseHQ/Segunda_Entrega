<?php
    session_start();
    $_SESSION['correo'] = null;
    $_SESSION['sesion'] = false;
    session_write_close();
    header('Location: /Spirit_web/Segunda_Entrega/Index.php');

?>