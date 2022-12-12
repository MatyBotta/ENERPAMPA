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
if(empty($_POST['nombre']) == true || empty($_POST['apellido']) == true || empty($_POST['contrasenia']) == true)
{
    include("crear_trabajador.php");
    echo '<script>alert("Por favor ingrese todos los campos obligatorios")</script>';
}
else
{
    $usuario = $_SESSION['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    if(empty($_POST['telefono']) == false)
    {
        $telefono = $_POST['telefono'];
    }
    else
    {
        $telefono = 0;
    }
    $contra = $_POST['contrasenia'];
    $in  = "INSERT INTO usuario (Mail, Nombre, Apellido, Contrasenia, Telefono, Tipo) values 
    ('$usuario','$nombre','$apellido','$contra', $telefono, 'Trabajador')";
    $con =  $conexion -> query($in);
    if($con == true)
    {
        echo "Usuario creado exitosamente";
    }
}