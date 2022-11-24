<!DOCTYPE html>
         <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñodesafprod.css"/>
            <link rel="stylesheet" href="diseñoagregarprod.css"/>
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
    $eliminar  = "DELETE from productos where ID = $ID";
    $delete =  $conexion -> query($eliminar);
    $eliminar2  = "DELETE from carac_prod where ID_prod = $ID";
    $delete2 =  $conexion -> query($eliminar2);
    if($delete === true && $delete2 === true)
    {
        ?>
    <section class="msg">
        <h2>¡Producto eliminado correctamente!</h2>
        <br>
        <a href = "definitivo_producto.php">Eliminar otro producto</a>
        <br>
        <a href = "panel_control.html">Volver al panel</a>

    </section>
        <?php
    }
}
else
{
    ?>
    <p> No ingreso ninguna opcion. </p>
    <a href = "definitivo.html">Volver a ingresar codigo</a>
</body>
    <?php
}