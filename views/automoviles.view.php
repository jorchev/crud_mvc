<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['titulo']; ?></title>
</head>
<body>

    <h2><?php echo $data['titulo']; ?></h2>

    <a href="index.php?c=Automoviles&a=nuevo">Agregar</a>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Opciones</th>
            </tr>
        </thead>

        <tbody>

            <?php

                foreach($data['automoviles'] as $auto){

                    echo "<tr>";
                    echo "<td>{$auto['placa']}</td>";
                    echo "<td>{$auto['marca']}</td>";
                    echo "<td>{$auto['modelo']}</td>";
                    echo "<td>{$auto['anio']}</td>";
                    echo "<td>{$auto['color']}</td>";
                    echo "<td><a href=\"index.php?c=automoviles&a=modificar&id={$auto['id']}\">Modificar</a></td>";
                    echo "</tr>";

                }

            ?>

        </tbody>

    </table>

</body>
</html>