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
if(empty($info[0]) == false)
{
    if($info[0] === $mail)
    {
        if($info[1] === $contrasenia)
        {
                $_SESSION['mail'] = $mail;
                // inicio de sesion exitoso para cliente
                include("mostrar_productos.php");
        }
        else
        {
            echo '<script>alert("Contraseña erronea")</script>';
            include('iniciar_sesion2.html');
        }
    }
    else
    {
        echo '<script>alert("Usuario no registrado")</script>';
        include('registrarse.html');
    }
}
else
{
    echo '<script>alert("Usuario no registrado")</script>';
    include('registrarse.html');
}

