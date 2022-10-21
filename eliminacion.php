<?php
session_start();
include("db.php");
if(empty($_POST['eleccion']) === false)
{
    $ID = $_POST['eleccion'];
    $eliminar  = "UPDATE productos set Estado = 'Eliminado' where ID = $ID";
    $delete =  $conexion -> query($eliminar);

    if($delete === true)
    {
        ECHO ":)";
    }
}
else
{
    ?>
    <p> No ingreso ninguna opcion. </p>
    <a href = "eliminar-producto.php">Volver a ingresar codigo</a>
    <?php
}