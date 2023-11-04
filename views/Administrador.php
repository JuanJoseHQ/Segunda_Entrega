<?php
    require_once('C:/xampp/htdocs/Spirit_Web/Segunda_Entrega/models/database.php');
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT * FROM producto");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql = $con->prepare("SELECT * FROM usuario");
    $sql->execute();
    $resultado2 = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    require_once('C:/xampp/htdocs/Spirit_web/Segunda_Entrega/views/layout/Header.php');
    ?>
    <div class="CRUD">
    <form action = "/Spirit_web/Segunda_Entrega/controllers/InsertarUsuario.php" method="post">
        <h>Administrador de Usuarios</h>
        <input type= "text" name = "Email" placeholder="Email">
        <input type= "number" name = "contrasena" placeholder="contraseña">
        
        <input type= "submit" value="Agregar Usuario">
    </form>
    </div>
    <div class = "Table">       
        <h>Usuarios</h>
        <table>
           <thead>
                <tr>
                    <th>Id</th>
                    <th>Rol</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th></th>
                    <th></th>
                </tr>
           </thead>
           <tbody>
                <?php foreach ($resultado2 as $row){?>
                <tr>
                    <th><?php echo  $row['Id']; ?></th>
                    <th><?php echo  $row['Rol']; ?></th>
                    <th><?php echo  $row['Email']; ?></th>
                    <th><?php echo  $row['Contrasena']; ?></th>
                    <th><a href = "/Spirit_web/Segunda_Entrega/views/EditarUsuario.php?Id=<?php echo  $row['Id']; ?>" class = "Editar">Editar</a></th>
                    <th><a href = "/Spirit_web/Segunda_Entrega/controllers/EliminarUsuario.php?Id=<?php echo  $row['Id']; ?>" class= "Eliminar">Eliminar</a></th>
                </tr>
                <?php } ?>
           </tbody>
            
        </table>
    </div>
            
        

    <div class="CRUD">
        <form action = "/Spirit_web/Segunda_Entrega/controllers/InsertarProducto.php" method="post">
            <h>Administrador de Productos</h>

            <input type= "text" name = "Nombre" placeholder="Nombre">
            <input type= "text" name = "Descripcion" placeholder="Descripcion">
            <input type= "number" name = "Precio" placeholder="Precio">
            <input type= "number" name = "Cantidad" placeholder="Cantidad">

            <input type= "submit" value="Agregar Producto">
        </form>
    </div>

    <div class = "Table">
        <h>Productos</h>
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
           <tbody>
                <?php foreach ($resultado as $row){?>
                <tr>
                    <th><?php echo  $row['Id']; ?></th>
                    <th><?php echo  $row['Nombre']; ?></th>
                    <th><?php echo  $row['Descripcion']; ?></th>
                    <th><?php echo  $row['Precio']; ?></th>
                    <th><?php echo  $row['Cantidad']; ?></th>
                    <th><a href = "/Spirit_web/Segunda_Entrega/views/EditarProducto.php?Id=<?php echo  $row['Id']; ?>" class = "Editar">Editar</a></th>
                    <th><a href = "/Spirit_web/Segunda_Entrega/controllers/EliminarProducto.php?Id=<?php echo  $row['Id']; ?>" class= "Eliminar">Eliminar</a></th>
                </tr>
                <?php } ?>
           </tbody>
            
        </table>
    </div>
    <?php
    require_once('C:/xampp/htdocs/Spirit_web/Segunda_Entrega/views/layout/Footer.php');
    ?>
        
</body>
</html>