<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spirit Colombia</title>
    <link rel="icon" type="image/png" href="assets/img/Spirit_Icon.ico"">
    <link rel="stylesheet" type="text/css" href="assets/css/StylePrincipal.css">
</head>
<body>
    <?php
    include __DIR__ . '/views/layout/Header.php';
    ?>
    <main class="sliders">
        <div class = "slide">
            <section class = "Index_Fondo">
                <h2 class = "index_titulo">¡Bienvenidos a la Pagina Web de Spirit Colombia!</h2>
                <p class="index_parrafo"> Somos una empresa dedicada a proporcionar servicios profesionales
                    en infraestructura y redes de telecomunicaciones según la normativa RITEL, domótica,
                    cableado estructurado y redes wifi. </p>    
                    
                <div class = "video">
                <video autoplay muted loop src = "assets/img/video.mp4"></video>
                </div>
            </section>
        </div>
        <div class = "slide">
            <section class="slide_contenedor">
                <div class="contenedor">
                    <!-- Primer recuadro -->
                    <div class="recuadro">
                        <a href="Domotica.html">
                        <img src="/Spirit_web/Segunda_Entrega/views/layout/Domotica.php" alt="Imagen 1">
                        </a>    
                        <p class="titulo">Domotica</p>
                        <p class="descripcion">La domótica es la automatización de sistemas y dispositivos
                             en el hogar para facilitar el control y la gestión a través de la tecnología,
                              como luces, termostatos y electrodomésticos.
                        </p>
                    </div>
            
                    <!-- Segundo recuadro -->
                    <div class="recuadro">
                        <a href="/Spirit_web/Segunda_Entrega/views/layout/NormativaRitel.php">
                        <img src="assets/img/Ritel.png" alt="Imagen 2">
                        </a>
                        <p class="titulo">Normativa Ritel</p>
                        <p class="descripcion">La normativa RETIE (Reglamento Técnico de Instalaciones 
                            Eléctricas) es una regulación en Colombia que establece estándares de seguridad
                             para instalaciones eléctricas, protegiendo a las personas y los bienes de 
                             riesgos eléctricos.
                        </p>
                    </div>
            
                    <!-- Tercer recuadro -->
                    <div class="recuadro">
                        <a href="/Spirit_web/Segunda_Entrega/views/layout/Contacto.php">
                        <img src="assets/img/Contacto.jpg" alt="Imagen 3">
                        </a>
                        <p class="titulo">Contacto</p>
                        <p class="descripcion"> Descubre cómo comunicarte con nosotros para obtener más
                            información, ademas podras visitar nuestras diversas redes sociales
                        </p>
                    </div>
                </div>
                
            </section>
            <?php
            include __DIR__ . '/views/layout/Footer.php';
            ?>
        </div>
    </main>
</body>
</html>