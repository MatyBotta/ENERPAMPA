<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$x = 0;
$mail = $_POST['mail'];
$contrasenia = $_POST['contrasenia'];
$seleccionar = "SELECT Mail, Contrasenia, Tipo FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if($info[0] === $mail)
{
    if($info[1] === $constrasenia)
    {
        if($info[1] === 'Trabajador')
        {
            $_SESSION['mail'] = $mail;
            // inicio de sesion exitoso para trabajador
            include("trabajador.php"); 
        }
        else
        {
            $x = 30;
            $_SESSION['x'] = $x;
            $_SESSION['mail'] = $mail;
            // inicio de sesion exitoso para cliente
            include("xxxxx.php"); 
        }
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