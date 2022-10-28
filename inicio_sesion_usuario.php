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
    if($info[1] === $contrasenia)
    {
        if($info[2] === 'Trabajador')
        {
            $_SESSION['mail'] = $mail;
            // inicio de sesion exitoso para trabajador
            include("panel_control.html"); 
        }
        else
        {
            $_SESSION['mail'] = $mail;
            // inicio de sesion exitoso para cliente
            include("index.html");
        }
    }
    else
    {
        echo "contraseña erronea";

        include("iniciar_sesion.html");
    }
}
else
{
    echo "usuario no registrado";

    include("iniciar_sesion.html");
}