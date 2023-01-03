<!DOCTYPE html>
<html lang="es">
 
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñodesafprod.css"/>
            <link rel="stylesheet" href="diseñoagregarprod.css"/>
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          </head>
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
$hoy = date("Y-m-d, g:i:s");
$date = new DateTime($hoy);
$fecha = $date->format('Y/m/d h:i:s');
$in = "INSERT INTO pedido (ID, Hora, Mail) values ($ID, '$fecha', '$mail')";
$greso =  $conexion -> query($in);
$in2 = "UPDATE carrito set pedido = $ID where Mail = '$mail' and Pedido = 0";
$greso2 =  $conexion -> query($in2);
?>
<section class="msg">
<h2>Estamos evaluando su pedido, a la brevedad nos comuniacaremos con usted.</h2>
    <button type="submit"><i class="fa-solid fa-right-to-bracket"><a href = "index_cliente.html"></i>Volver</button>
</section>
<?php
