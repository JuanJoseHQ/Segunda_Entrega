<?php
session_start();

if (isset($_POST['correo'])) {
    $email = $_POST['correo'];
    $password = $_POST['contraseña'];

    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT * FROM usuario WHERE Email = :email");
    $sql->bindParam(':email', $email);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultado) > 0) {
        $row = $resultado[0];

        if (strcasecmp($password, $row["Contrasena"]) == 0) {
            $_SESSION['correo'] = $email;
            $_SESSION['sesion'] = true;
            $_SESSION['rol'] = $row['Rol'];
            header('Location: /Spirit_web/Segunda_Entrega/Index.php');
        } else {
            header('Location: /Spirit_web/Segunda_Entrega/views/Inicio.php');
        }
    } else {
        header('Location: /Spirit_web/Segunda_Entrega/views/Inicio.php');
    }
} else {
    header('Location: /Spirit_web/Segunda_Entrega/views/Inicio.php');
}

?>