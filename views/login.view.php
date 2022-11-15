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
    <form action="index.php?c=Usuarios&a=iniciarSesion" method="post" id="iniciar-sesion" name="iniciar-sesion" autocomplete="off">
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit" id="login" name="login">Iniciar sesión</button>
        </div>
    </form>
</body>
</html>