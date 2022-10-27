<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
if(empty($_POST['eleccion']) === false || empty($_SESSION['eleccion']) === false)
{
    if(empty($_POST['eleccion']) === false)
    {
        $ID = $_POST['eleccion'];
    }
    if(empty($_SESSION['eleccion']) === false)
    {
        $ID = $_SESSION['eleccion'];
    }
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
    <a href = "eliminar-producto.html">Volver a ingresar codigo</a>
    <?php
}