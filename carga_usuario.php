<?php
session_start();
include("db.php");
$x = 0;
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$contrasenia = $_POST['contrasenia'];
$seleccionar = "SELECT Mail FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if($info[0] !== $mail)
{
    $in = "INSERT INTO usuario (Nombre, Apellido, Contrasenia, Mail) values 
    ('$Nombre','$Apellido','$contrasenia','$mail')";
    $con =  $conexion -> query($in);
}
if(empty($con) === false)
{
    // registro realizado
    $x = 10;
    $_SESSION['x'] = $x;
    include("xxxxx.php");
}
else
{
        // registro no realizado
    $x = 20;
    $_SESSION['x'] = $x;
    include("xxxxx.php");
}
