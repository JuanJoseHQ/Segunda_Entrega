<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $Id = $_GET['Id'];
    $sql = $con->prepare("SELECT * FROM producto WHERE Id = '$Id'");
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
    <div class="CRUD">
    <form action="/Spirit_web/Segunda_Entrega/models/EditarProducto_.php" method="post">
            <h>Editor de Productos</h>
            <?php foreach ($resultado as $row) { ?>
            <input type="hidden" name="Id" placeholder="Id" value="<?php echo $row['Id']; ?>">
            <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>">
            <input type="text" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']; ?>">
            <input type="number" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']; ?>">
            <input type="number" name="Cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad']; ?>">
            <input type="submit" value="Actualizar Producto">
            <?php } ?>
        </form>
    </div>
</body>
</html>