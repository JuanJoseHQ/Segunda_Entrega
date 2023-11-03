<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion - Spirit Colombia</title>
    <link rel="icon" type="image/png" href="/Spirit_web/Segunda_Entrega/assets/img/Spirit_Icon.ico">
    <link rel="stylesheet" type="text/css" href="/Spirit_web/Segunda_Entrega/assets/css/StyleInicio.css">
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="form-background">
            <h1>Iniciar sesión</h1>
            <form action="/Spirit_web/Segunda_Entrega/views/VariablesSesion.php" method="post" >
                <input type="email" name="correo" id="email" placeholder="Correo" required>
                <br>
                <input type="password" name="contraseña" id="password" placeholder="Contraseña" required>
                <br><br><br><br>
                <input type="submit" value="Iniciar Sesion">
                <br><br><br><br>
                <div class="login">
                    <p>¿Necesitas una cuenta?&nbsp;&nbsp;&nbsp;<a href="/Spirit_web/Segunda_Entrega/views/Registro.php">Registrarse</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>