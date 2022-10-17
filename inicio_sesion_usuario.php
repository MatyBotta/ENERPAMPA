<?php
session_start();
include("db.php");
$x = 0;
$mail = $_POST['mail'];
$contrasenia = $_POST['contrasenia'];
$seleccionar = "SELECT Mail, Contrasenia FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if($info[0] === $mail)
{
    if($info[1] === $mail)
    {
        $_SESSION['mail'] = $mail;
        // inicio de sesion exitoso
        $x = 30;
        $_SESSION['x'] = $x;
        include("xxxxx.php"); 
    }
    else
    {
        // contraseña erronea
        $x = 40;
        $_SESSION['x'] = $x;
        include("xxxxx.php");
    }
}
else
{
    // usuario no registrado
    $x = 50;
    $_SESSION['x'] = $x;
    include("xxxxx.php");
}