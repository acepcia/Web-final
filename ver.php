<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ver.css">
    <title>Listado de Libros</title>
    <body>
    <div class="container">

        <h1>Listado de Proximos Libros a Agregar</h1>
        <?php 
        include_once 'conexion.php';
        $consulta = "SELECT * FROM ingresos";
        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            while ($row = $resultado->fetch_array()) {
                $ID = $row['ID'];
                $nombre = $row['nombre'];
                $correo = $row['correo'];
                $libro = $row['libro'];
                $autor = $row['autor'];
                $ingreso = $row['ingreso'];
        ?>
                <div class="ver">
                    <h2><?php echo $ID; ?></h2>
                    <p>
                        <b>nombre:</b> <?php echo $nombre; ?><br>
                        <b>correo:</b> <?php echo $correo; ?><br>
                        <b>libro:</b><?php echo $libro; ?><br>
                        <b>autor:</b> <?php echo $autor; ?><br>
                        <b>ingreso:</b> <?php echo $ingreso; ?><br>
                    </p>
                </div>
        <?php
            }
            mysqli_free_result($resultado);
        }
        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>



