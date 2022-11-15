<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['titulo']; ?></title>
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><?php echo $data['titulo']; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="#" class="nav-link inactive">Bienvenido <?php echo $_SESSION['nombre']; ?></a></li>
                        <li class="nav-item"><a href="index.php?c=Usuarios&a=cerrarSesion" class="nav-link active">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <a href="index.php?c=Automoviles&a=nuevo" class="btn btn-success mb-3">Agregar</a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Color</th>
                    <th class="text-center">Opciones</th>
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
                        echo "<td class=\"text-center\">
                                <a href=\"index.php?c=automoviles&a=modificar&id={$auto['id']}\" class=\"btn btn-sm btn-primary\">Modificar</a> 
                                <a href=\"#\" onclick=\"confirmarEliminar('{$auto['placa']}',{$auto['id']})\" class=\"btn btn-sm btn-danger\">Eliminar</a>
                            </td>";
                        echo "</tr>";

                    }

                ?>

            </tbody>

        </table>
    </div>

    <script src="lib/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmarEliminar(placa,id){

            var resp = confirm("Deseas eliminar el automóvil con la placa " + placa);
            if(resp){
                window.location.href = "index.php?c=automoviles&a=eliminar&id=" + id;
            }

        }

    </script>

</body>
</html>