<?php

    if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$x = 0;
$mail = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];
$seleccionar = "SELECT Mail, Contrasenia, Tipo FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if(empty($info[0]) === false)
{
    if($info[0] === $mail)
{
    if($info[1] === $contrasenia)
    {
        if($info[2] === 'Trabajador')
        {
            $_SESSION['mail'] = $mail;
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $hoy = date("Y-m-d, g:i a");
            $date = new DateTime($hoy);
            $fecha = $date->format('Y/m/d h:i:s A');
            $in2  = "INSERT INTO ingresos (Mail, Fecha) values ('$mail', '$fecha')";
            $con2 =  $conexion -> query($in2);
            // inicio de sesion exitoso para trabajador
            include("panel_control.html"); 
        }
        else
        {
            $_SESSION['mail'] = $mail;
            // inicio de sesion exitoso para cliente
            include("index_cliente.html");
        }
    }
    else
    {
        include("contraseniamal.html");
    }
}
else
{
    include("usuarionoregistrado.html");
}
}
else
{
    
    include("usuarionoregistrado.html");
}
