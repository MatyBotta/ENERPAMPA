<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$mail = $_SESSION['mail'];
$seleccionar = "SELECT ID FROM pedido order by ID desc";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
$ID = $info[0] + 1;
date_default_timezone_set('America/Argentina/Buenos_Aires');
$hoy = date("Y-m-d, g:i a");
$date = new DateTime($hoy);
$fecha = $date->format('Y/m/d h:i:s A');
$in = "INSERT INTO pedido (ID, Hora, Mail) values ($ID, '$fecha', '$mail')";
$greso =  $conexion -> query($in);
$in2 = "UPDATE carrito set pedido = $ID where Mail = '$mail'";
$greso2 =  $conexion -> query($in2);
echo "Pedido ya realizado, en los proximos estaremos brindando una respuesta";