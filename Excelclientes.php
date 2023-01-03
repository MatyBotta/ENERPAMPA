<!DOCTYPE html>
<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
          </head> 
<body> 
<?php

if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Lista_clientes.xls");  
header("Pragma: no-cache");  
header("Expires: 0");
$contar = "SELECT count(*) from usuario where Tipo = 'Cliente'";
$con =  $conexion -> query($contar);
$visado = $con -> fetch_array();
if(empty($visado[0]) === false)
{
    ?>
    <table border = 1>
    <tr><th>Nombre y Apellido</th><th>Rubro</th><th>Mail</th><th>Telefono</th><th>Celular</th></tr>
    <?php
    $mail = 'AAAAAAAAAA';
    for($i = 0; $i < $visado[0]; $i ++)
    {
        $sel = "SELECT * from usuario where Mail > '$mail' and  Tipo = 'Cliente' order by Mail asc";
        $ecc =  $conexion -> query($sel);
        $ionar = $ecc -> fetch_array();
        $mail = $ionar[0];
        if(empty($carac[4]) === true)
        {
            $ionar[4] = "-";
        }   
        if(empty($carac[5]) === true)
        {
            $ionar[5] = "-";
        }
        ?>
        <tr><td><?php echo $ionar[2] . " " . $ionar[3]?></td><td><?php echo $ionar[7]?></td><td><?php echo $ionar[0]?></td><td><?php echo $ionar[4]?></td><td><?php echo $ionar[5]?></td></tr>
        <?php
    }
    
    ?>
    </table>
    <?php
}