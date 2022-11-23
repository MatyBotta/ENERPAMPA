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
}
$in = "UPDATE productos set Estado = 'Vigente' where ID = $ID";
$con =  $conexion -> query($in);
if(empty($con) === false)
{
    ?>
   <section class="msg">
    <h2>"Producto reactivado correctamente."</h2>
    <button><a href = "volver-activar-producto.html">Volver</button>
    <?php
}
else
{
    ?>
    <section class="msg">
    <h2>ERROR</h2>
    <?php
}
?>
</body>