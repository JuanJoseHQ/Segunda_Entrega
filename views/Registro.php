<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Spirit Colombia</title>
    <link rel="icon" type="image/png" href="/Spirit_web/Segunda_Entrega/assets/img/Spirit_Icon.ico">
    <link rel="stylesheet" type="text/css" href="/Spirit_web/Segunda_Entrega/assets/css/StyleInicio.css">
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="form-background">
            <h1>Registrarse</h1>
            <form action="/Spirit_web/Segunda_Entrega/controllers/InsertarUsuario.php" method="post">
                <input type="email" name="Email" id="email" placeholder="Correo electrónico" required>
                <br>
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
                <br>
                <input type="password" name="confirm" id="confirmPassword" placeholder="Confirmar contraseña" required>
                <br><br><br><br>
                <input type="submit" value="Iniciar Sesion">
                <br><br><br><br>
                <div class="login">
                    <p>¿Ya tienes una cuenta?&nbsp;&nbsp;&nbsp;<a href="/Spirit_web/Segunda_Entrega/views/Inicio.php">Iniciar sesión</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>