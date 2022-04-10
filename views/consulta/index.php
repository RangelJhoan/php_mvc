<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Consulta</title>
</head>
<body>
    <?php require 'views/header.php'?>

    <div id="main">
        <h1 class="center">Sección de consulta</h1>

        <div id="respuesta" class="center"></div>

        <table width="100%">
            <thead>
                <tr>
                    <th>Número Documento</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody id="tbody-usuarios">
                <?php
                include_once 'models/usuario.php';
                foreach ($this->alumnos as $row) {
                    $alumno = new Usuario();
                    $alumno = $row;
                ?>
                <tr id="fila-<?php echo $alumno->id;?>">
                    <td><?php echo $alumno->numeroDocumento; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->id; ?>">Editar</a></td>
                    <td><button class="bEliminar" data-id="<?php echo $alumno->id;?>" data-nombre = "<?php echo $alumno->nombre; ?>">Eliminar</button></td>
                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->id; ?>">Eliminar</a></td> -->
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

    <?php require 'views/footer.php'?>
    <script src="<?php echo constant('URL')?>public/js/main.js"></script>
</body>
</html>