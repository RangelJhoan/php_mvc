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
                foreach ($this->usuarios as $row) {
                    $usuario = new Usuario();
                    $usuario = $row;
                ?>
                <tr id="fila-<?php echo $usuario->id;?>">
                    <td><?php echo $usuario->numeroDocumento; ?></td>
                    <td><?php echo $usuario->nombre; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verUsuario/' . $usuario->id; ?>">Editar</a></td>
                    <td><button class="bEliminar" data-id="<?php echo $usuario->id;?>" data-nombre = "<?php echo $usuario->nombre; ?>">Eliminar</button></td>
                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarUsuario/' . $usuario->id; ?>">Eliminar</a></td> -->
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