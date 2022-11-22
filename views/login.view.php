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
    <div class="container col-12 col-md-6 col-lg-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo $data['titulo']; ?></h2>
                <form action="index.php?c=Usuarios&a=iniciarSesion" method="post" id="iniciar-sesion" name="iniciar-sesion" autocomplete="off">
                    <div class="form-group">
                        <label for="usuario" class="form-label mt-4">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label mt-4">Contraseña:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary mt-4" id="login" name="login">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="lib/js/bootstrap.bundle.min.js"></script>
</body>
</html>