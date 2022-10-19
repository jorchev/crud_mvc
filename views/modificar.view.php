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
    <form action="index.php?c=Automoviles&a=actualizar" method="post" id="nuevo" name="nuevo" autocomplete="off">

        <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>">

        <div>
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" value="<?php echo $data['automovil']['placa']; ?>">
        </div>
        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" value="<?php echo $data['automovil']['marca']; ?>">
        </div>
        <div>
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" value="<?php echo $data['automovil']['modelo']; ?>">
        </div>
        <div>
            <label for="anio">Año</label>
            <input type="text" name="anio" id="anio" value="<?php echo $data['automovil']['anio']; ?>">
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" value="<?php echo $data['automovil']['color']; ?>">
        </div>
        <div>
            <button type="submit" id="actualizar" name="guardar">Actualizar</button>
        </div>
    </form>
</body>
</html>