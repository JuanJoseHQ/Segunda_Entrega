<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normativa Ritel-Spirit Colombia</title>
    <link rel="icon" type="image/png" href="/Spirit_web/Segunda_Entrega/assets/img/Spirit_Icon.ico">
    <link rel="stylesheet" type="text/css" href="/Spirit_web/Segunda_Entrega/assets/css/StyleHeader.css">
</head>
<body>
<header>
    <div class="logo">
        <a href="/Spirit_web/Segunda_Entrega/index.php" class="logo-link">
            <img src="/Spirit_web/Segunda_Entrega/assets/img/Spitir_Logo.JPG" alt="Spirit Colombia Logo">
        </a>
    </div>
    <input type="checkbox" id="check">
    <label for="check" class="menu-icon">&#8801</label>
    <nav class="menu">
    <?php
            if (isset($_SESSION['sesion']) && $_SESSION['sesion'] === true) {
                echo '<a href="/Spirit_web/Segunda_Entrega/views/CerrarSesion.php">Cerrar Sesión</a>';
                echo '<a >' . $_SESSION['correo'] . '</a>';
                echo '<a href="/Spirit_web/Segunda_Entrega/views/NormativaRitel.php">Normativa RITEL</a>';
                echo '<a href="/Spirit_web/Segunda_Entrega/views/Domotica.php">Domótica</a>';
                echo '<a href="/Spirit_web/Segunda_Entrega/views/Contacto.php">Contacto</a>';
                if($_SESSION['rol'] === 1){
                    echo '<a href="/Spirit_web/Segunda_Entrega/views/Administrador.php">Administrador</a>';
                }
                
            } else {
                echo '<a href="/Spirit_web/Segunda_Entrega/views/Inicio.php">Inicio</a>';
                echo '<a href="/Spirit_web/Segunda_Entrega/views/NormativaRitel.php">Normativa RITEL</a>';
                echo '<a href="/Spirit_web/Segunda_Entrega/views/Domotica.php">Domótica</a>';
                echo '<a href="/Spirit_web/Segunda_Entrega/views/Contacto.php">Contacto</a>';
            }
    ?>
        
        <label for="check" class="close-menu">&#215</label>
    </nav>
</header>
</body>
</html>
