<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>DNI</td>
            <td>Nombre</td>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($usuarios as $user){
                echo "<tr>";
                echo "<td>".$user['Id']."</td>";
                echo "<td>".$user['DNI']."</td>";
                echo "<td>".$user['Nombres']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
    
</body>
</html>