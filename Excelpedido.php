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
$ID = $_GET["id_pedido"];
$carrito = "SELECT * from pedido where ID = $ID";
$shop =  $conexion -> query($carrito);
$ionar = $shop -> fetch_array();
$carrito2 = "SELECT * from usuario where Mail = '$ionar[1]'";
$shop2 =  $conexion -> query($carrito2);
$ionar2 = $shop2 -> fetch_array();
if($ionar2[2] == null)
  {
    $ionar2[2] = '';
  }
  if($ionar2[3] == null)
  {
    $ionar2[3] = '';
  }
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Pedido_$ID-$ionar2[2] $ionar2[3].xls");  
header("Pragma: no-cache");  
header("Expires: 0");
if($ionar2[4] == 0)
  {
    $ionar2[4] = '-';
  }
  if($ionar2[5] == 0)
  {
    $ionar2[5] = '-';
  }
?>
<html><body>
<h2 style="text-align:center; width:120px; height:120%;  font-weight:60; color:#000a35; font-size: 30;">Pedido por pagina web</h2>
<li style = "font-style: italic; font-size: 15; font-weight: bold;">Fecha: <?php echo $ionar[2]?>,  ID Pedido: <?php echo $ID ?></li>
<li style = "font-style: italic; font-size: 15;"> Contacto: <?php echo $ionar2[2] . " " . $ionar2[3] ?>,  Mail: <?php echo $ionar[1]?></li>
<li style = "font-style: italic; font-size: 15;"> Telefono: <?php echo $ionar2[4] ?>,  Celular: <?php echo $ionar2[5]?></li>
<table border = 1><th>Item</th><th>Cant.</th><th>Nombre</th><th>Marca</th><th>Codigo</th><th>ID</th><th>Valor</th><th>IVA</th></tr>
<?php
$ID_prod = 0;
$mail = $ionar[1];
$contar = "SELECT count(*) from carrito where Mail = '$mail' and Pedido = $ID";
$contado =  $conexion -> query($contar);
$var = $contado -> fetch_array();
for($i = 0; $i < $var[0]; $i ++)
{
    $carrito = "SELECT ID_Prod, Cantidad from carrito where Mail = '$mail' and ID_Prod > $ID_prod and Pedido = $ID order by ID_Prod asc";
    $shop =  $conexion -> query($carrito);
    $ionar = $shop -> fetch_array();
    $ID_prod = $ionar[0];
    $prod = "SELECT * from productos where ID = $ID_prod and Estado != 'Eliminado'";
    $stock =  $conexion -> query($prod);
    $ionar2 = $stock -> fetch_array();
    if(empty($ionar2[0]) === false)
    {
        if($ionar2[11] == "Pesos")
        {
            $valor = "$";
        }
        else
        {
            $valor = "U$"."S";
        }
        $a = $i + 1;
        ?>
        <tr><td> <?php echo $a ?></td><td><?php echo $ionar[1] ?></td><td><?php echo $ionar2[2] ?></td><td><?php echo $ionar2[3] ?></td><td style="text-align: left;"><?php echo$ionar2[4]?></td><td><?php echo $ID_prod ?></td><td><?php echo $valor.$ionar2[8] ?></td><td><?php echo $ionar2[12] ?></td></tr>
        <?php
    }
}
?>
</table>