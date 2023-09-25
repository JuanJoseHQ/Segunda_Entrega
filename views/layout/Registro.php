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
            <form id="registrationForm">
                <input type="text" name="username" id="username" placeholder="Nombre de usuario" required>
                <br>
                <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
                <br>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <br>
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmar contraseña" required>
                <br><br><br><br>
                <a href="Inicio.html" id="RegistrarButton" class="button-link">Registrarse</a>
                <br><br><br><br>
                <div class="login">
                    <p>¿Ya tienes una cuenta?&nbsp;&nbsp;&nbsp;<a href="Inicio.html">Iniciar sesión</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var registrationForm = document.getElementById("RegistrarButton");

        registrationForm.addEventListener("click", function(event) {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (username === "" || email === "" || password === "" || confirmPassword === "") {
                event.preventDefault();
                alert("Por favor, completa todos los campos.");
            } else if (password !== confirmPassword) {
                event.preventDefault();
                alert("Las contraseñas no coinciden.");
            }
        });
    });
</script>
</html>