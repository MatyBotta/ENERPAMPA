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
header("Content-Disposition: attachment; filename=Lista_Pedido.xls");  
header("Pragma: no-cache");  
header("Expires: 0");
$mail = $_SESSION['mail'];
$contar = "SELECT count(*) from carrito where Mail = '$mail'";
$contado =  $conexion -> query($contar);
$var = $contado -> fetch_array();
if(empty($var[0]) === false)
{
    ?>
    <h2 style="text-align:left; width:120px; height:120%;  font-weight:60; color:#000a35;">ENERPAMPA S.A.</h2>
    <li style = "font-style: italic; font-weight: bold; font-size: 15;">Gral. Mansilla 640</li>
    <li style = "font-style: italic; font-weight: bold; font-size: 15;">Lomas del Mirador (1752)</li>
    <li style = "font-style: italic; font-weight: bold; font-size: 15;">ventas@enerpmapa.com - enerpampa.com</li>
    <li style = "text-align:right;">cguglielmo@enerpampa.com - tel: 011 7533-2216</li>
    <li style = "text-align:right;">tvazquez@enerpampa.com - tel: 011 2106-0462</li>
    <li style = "text-align:right;">gleviu@enerpampa.com - tel: 011 7547-6554</li>
<br>
<table border = "1">
    <tr font = "bold" style = "background-color:#D3D3D3;"><th>Item</th><th>Cant.</th><th>Nombre</th><th>Marca</th><th>Codigo</th><th>Valor</th><th>Fecha del valor</th><th>Moneda</th><th>IVA</th></tr>
    <?php
    $ID = 0;
    for($i = 0; $i < $var[0]; $i ++)
    {
        $carrito = "SELECT ID_Prod, Cantidad from carrito where Mail = '$mail' and ID_Prod > $ID order by ID_Prod asc";
        $shop =  $conexion -> query($carrito);
        $ionar = $shop -> fetch_array();
        $ID = $ionar[0];
        $prod = "SELECT * from productos where ID = $ID and Estado != 'Eliminado'";
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
            $imagen = $ionar2[7];
            $img="imagenes_subidas/".$imagen;
            ?>
            <tr><td><?php echo $i + 1?></td><td><?php echo $ionar[1]?></td><td><?php echo $ionar2[2]?></td><td><?php echo $ionar2[3]?></td><td style="text-align: left;"><?php echo $ionar2[4]?></td><td><?php echo $valor.$ionar2[8]?></td><td><?php echo $ionar2[10]?></td><td><?php echo $ionar2[11]?></td><td><?php echo $ionar2[12]?></td>
            <?php
        }
    }
    ?>
    </table>
    <h3 font = "bold" style="text-align: center;">Los valores son referenciales, por favor solicitar cotizacion.</h3>
    <?php
}
else
{
    echo $_SESSION['mail'];
    echo "Aun no ha seleccionado ningun producto";
}
?>
</body>
</html>