<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT * FROM producto");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="icon" type="image/png" href="/Spirit_web/Segunda_Entrega/assets/img/Spirit_Icon.ico">
    <link rel="stylesheet" type="text/css" href="/Spirit_web/Segunda_Entrega/assets/css/StyleAdministrador.css">
</head>
<body>
    <?php
    include 'Header.php';
    ?>
    <div class="CRUD">
        <form action = "ProductoController.php">
            <h>Administrador de Productos</h>

            <input type= "text" name = "Nombre" placeholder="Nombre">
            <input type= "text" name = "Descripcion" placeholder="Descripcion">
            <input type= "text" name = "Precio" placeholder="Precio">
            <input type= "text" name = "Cantidad" placeholder="Cantidad">

            <input type= "summit" value="Agregar Producto">
        </form>
    </div>

    <div>
        <h>CRUD Productos</h>
        <table>
           <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th></th>
                    <th></th>
                </tr>
           </thead>
           <body>
                <?php foreach ($resultado as $row){?>
                <th><?php echo  $row['Id']; ?></th>
                <th><?php echo  $row['Nombre']; ?></th>
                <th><?php echo  $row['Descripcion']; ?></th>
                <th><?php echo  $row['Precio']; ?></th>
                <th><?php echo  $row['Cantidad']; ?></th>
                <th><a href = "#">Editar</a></th>
                <th><a href = "#">Eliminar</a></th>
                <?php } ?>
           </body>
            
        </table>
    </div>
    <?php
    include 'Footer.php';
    ?>
        
</body>
</html>