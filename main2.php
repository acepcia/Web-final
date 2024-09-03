<?php 
include_once 'conexion.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
$ID=$_POST['ID'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pelicula=$_POST['pelicula'];
$director=$_POST['director'];
$ingreso=$_POST['ingreso'];

$sql= "UPDATE ingresos SET nombre = '$nombre',correo = '$correo', pelicula = '$pelicula',director='$director',ingreso='$ingreso' WHERE
ID = $ID ";

    if(mysqli_query($conexion,$sql))
    {
        header("Location: pantalla_update.html"); 
    exit();
    }
    else 
    {
        echo"no se actualizaron los datos".mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>