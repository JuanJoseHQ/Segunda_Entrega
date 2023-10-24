<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id, nombre, precio, descripcion FROM producto");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normativa Ritel - Spirit Colombia</title>
    <link rel="icon" type="image/png" href="/Spirit_web/Segunda_Entrega/assets/img/Spirit_Icon.ico">
    <link rel="stylesheet" type="text/css" href="/Spirit_web/Segunda_Entrega/assets/css/StyleDomotica.css">
</head>
<body>
    <?php
    include 'Header.php';
    ?>
    <div class="container_2">
        
            <?php foreach ($resultado as $row) { ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <?php
                            $id = $row['id'];
                            $img = "/Spirit_web/Segunda_Entrega/assets/img/" . $id . ".jpg";
                            if (!is_file($img)) {
                                $img = "/Spirit_web/Segunda_Entrega/assets/img/nophoto.jpg";
                            }
                            
                        ?>
                        <img src="<?php echo $img;?> " alt="Imagen">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo  $row['nombre']; ?></h5>
                            <p class="card-descripcion"><?php echo $row['descripcion']?></p>
                            <p class="card-text">$<?php echo number_format($row['precio'], 2, ".",","); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        
    </div>


    <?php
    include 'Footer.php';
    ?>
        
</body>
</html>