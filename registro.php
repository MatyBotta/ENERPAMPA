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
$cel = $_POST['cel'];
$rubro = $_POST['rubro'];
$seleccionar = "SELECT * FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if(empty($info[0]) === true)
{
    if(empty($_POST['nombres']) === false && empty($_POST['apellidos']) === false && empty($_POST['contrasenia']) === false)
    {
        $in  = "INSERT INTO usuario (Mail, Contrasenia, Nombre, Apellido, Tipo, Telefono, Celular, Rubro) values 
        ('$mail', '$contrasenia', '$nombre', '$apellido', 'Cliente', $tel, $cel, '$rubro')";
        $con =  $conexion -> query($in); 
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $hoy = date("Y-m-d, g:i a");
        $date = new DateTime($hoy);
        $fecha = $date->format('Y/m/d h:i:s A');
        $in2  = "INSERT INTO ingresos (Mail, Fecha) values ('$mail', '$fecha')";
        $con2 =  $conexion -> query($in2);
    }
    else
    {
        echo "Por favor, ingrese todos los campos obligatorios";
        include("registrarse.html");
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