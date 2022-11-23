<!DOCTYPE html>
<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñodesafprod.css"/>
          </head>
         <body>  
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
    elseif(empty($_SESSION['eleccion']) === false)
    {
        $ID = $_SESSION['eleccion'];
    }
    $eliminar  = "UPDATE productos set Estado = 'Eliminado' where ID = $ID";
    $delete =  $conexion -> query($eliminar);

    if($delete === true)
    {
        ?>
        <section class="msg">
        <h1>Producto desafectado correctamente.</h1>
        <button><a href = "eliminar-producto.html">Volver</a></button>
        </section>

        <?php
    }
}
else
{
    ?>
    <p> No ingreso ninguna opcion. </p>
    <a href = "eliminar-producto.html">Volver a ingresar codigo</a>
</body>
    <?php
}