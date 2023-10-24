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
            <form>
                <input type="email" name="email" id="email" placeholder="Correo" required>
                <br>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <br><br><br><br>
                <a href="/Spirit_web/Segunda_Entrega/Index.php" id="loginButton" class="button-link">Ingresar</a>
                <br><br><br><br>
                <div class="login">
                    <p>¿Necesitas una cuenta?&nbsp;&nbsp;&nbsp;<a href="/Spirit_web/Segunda_Entrega/views/layout/Registro.php">Registrarse</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var loginButton = document.getElementById("loginButton");
        loginButton.addEventListener("click", function(event) {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            if (email === "" || password === "") {
                event.preventDefault();
                alert("Por favor, completa todos los campos.");
            }
        });
    });
    </script>
</html>