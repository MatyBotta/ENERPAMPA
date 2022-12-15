<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$x = 0;
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$contrasenia = $_POST['contrasenia'];
$seleccionar = "SELECT * FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if(empty($info[0]) == true)
{
    $in = "INSERT INTO usuario (Nombre, Apellido, Contrasenia, Mail, Tipo) values 
    ('$Nombre','$Apellido','$contrasenia','$mail', 'Cliente')";
    $con =  $conexion -> query($in);
}
elseif($info[0] !== $mail)
{
    $in = "INSERT INTO usuario (Nombre, Apellido, Contrasenia, Mail, Tipo) values 
    ('$Nombre','$Apellido','$contrasenia','$mail', 'Cliente')";
    $con =  $conexion -> query($in);
}
if(empty($con) === false)
{
    echo "registro realizado";
    include("index.html");
}
else
{
    echo "Mail ya utilizado";
    include("registrarse.php");
}
