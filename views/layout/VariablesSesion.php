<?php
session_start();

if (isset($_POST['correo'])) {
    $email = $_POST['correo'];

    // Puedes realizar la validación y autenticación del usuario aquí.
    // Por ejemplo, comparar el correo y la contraseña con los valores en tu base de datos.

    // Si el usuario es válido, inicializa las variables de sesión.
    $_SESSION['correo'] = $email;
    $_SESSION['sesion'] = true;

    // Redirige al usuario a la página deseada.
    header('Location: /Spirit_web/Segunda_Entrega/Index.php');
} else {
    // Maneja el caso en el que los datos del formulario no se enviaron correctamente.
    header('Location: /Spirit_web/Segunda_Entrega/Inicio.php');
}
?>