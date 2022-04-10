<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Nuevo</title>
</head>
<body>
    <?php require 'views/header.php' ?>

    <div id="main">
        <h1 class="center">Detalle de <?php echo $this->usuario->numeroDocumento; ?></h1>

        <div class="center">
            <?php echo $this->mensaje; ?>
        </div>

        <form action="<?php echo constant('URL') ?>consulta/actualizarUsuario" method="POST">
            <p>
                <label for="numeroDocumento">Número de documento</label><br>
                <input type="text" name="numeroDocumento" value="<?php echo $this->usuario->numeroDocumento; ?>" required disabled>
            </p>
            <p>
                <label for="Nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->usuario->nombre; ?>" required>
            </p>
            <p>
                <label for="Apellido">Apellido</label><br>
                <input type="text" name="apellido" required>
            </p>
            <p>
                <input type="submit" value="Actualizar usuario">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>