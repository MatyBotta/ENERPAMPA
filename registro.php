<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$x = 0;
$mail = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$tel = $_POST['tel'];
$seleccionar = "SELECT * FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if(empty($info[0]) === true)
{
    if(empty($_POST['nombres']) === false && empty($_POST['apellidos']) === false && empty($_POST['contrasenia']) === false)
    {
        $in  = "INSERT INTO usuario (Mail, Contrasenia, Nombre, Apellido, Tipo, Telefono) values 
        ('$mail', '$contrasenia', '$nombre', '$apellido', 'Cliente', $tel)";
        $con =  $conexion -> query($in);   
    }
}
else
{
    echo "mail ya utilizado";
    include("registrarse.html");
}
if($con === true)
{
    echo "Usuario registrado";
}