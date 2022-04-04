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
        <h1 class="center">Sección de nuevo</h1>
        <form action="<?php echo constant('URL') ?>nuevo/registrarAlumno" method="POST">
            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" id="">
            </p>
            <p>
                <label for="Nombre">Nombre</label><br>
                <input type="text" name="nombre" id="">
            </p>
            <p>
                <label for="Apellido">Apellido</label><br>
                <input type="text" name="apellido" id="">
            </p>
            <p>
                <input type="submit" value="Registrar nuevo alumno">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>