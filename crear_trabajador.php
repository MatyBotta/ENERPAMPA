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
include("db.php");
if(!isset($_SESSION))
{
    session_start();
}
$usuario = $_POST['usuario'];
$_SESSION['usuario'] = $usuario;
$comprobacion = "SELECT * from usuario where Mail = '$usuario' and Tipo = 'Trabajador'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    ?>
    <section class="msg">
    <h2>Este mail se encuentra ocupado por otro trabajador.</h2>
        <button type="submit"><i class="fa-solid fa-right-to-bracket"><a href = "panel_control.html"></i>Volver</button>
    </section>
    <?php
}
else
{
    ?>
    <section class="selec">
    <form action="creacion_trabajador.php" method="post">
    <h3>Nombre (obligatorio)</h3>
    <input step="any" type="text"  name="nombre" value="">           
    <br>
    <h3>Apellido (obligatorio)</h3>
    <input step="any" type="text" name="apellido" value="" >
    <br>
    <h3>Contraseña (obligatorio)</h3>
    <input step="any" type="text" name="contrasenia" value="" >
    <br>
    <h4>Telefono (opcional)</h4>
    <input step="any" type="number" name="telefono" value="" >
    <ul><button type="submit"><i class="fa-solid fa-right-to-bracket"></i>Ingresar</button></ul>
</section>
    <?php
}