<!DOCTYPE html>
<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
          </head> 
<style>
    * {
margin:0;
padding:0;
}
#columna1 {
position:absolute;
top:0px;
left:0px;
width:200px;
margin-top:10px;
background-color:#ffff55;
}
#columna2 {
margin-left:220px;
margin-right:20px;
margin-top:10px;
background-color:#ffffbb;
}
</style>
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
    <table >
    <tr><td>Gral. Mansilla 640</td><td><td>tvazquez@enerpampa.com</td></td><td> tel: 0112106-0462</td></tr>  
    <tr><td>(1752) Lomas del Mirador</td><td><td>gleviu@enerpampa.com</td></td><td> tel: 0117547-6554</td></tr>
    <td>ventas@enerpmapa.com</td><td><td>cguglielmo@enerpampa.com</td></td><td> tel: 0117533-2216</td></tr>
</table>
<br>
<br>
<table border = "1">
    <td>Nombre</td><td>Marca</td><td>Valor</td><td>Fecha valor</td><td>Moneda</td><td>IVA</td><td>Codigo</td><td>Cant.</td></tr>
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
            <tr><td><?php echo $ionar2[2]?></td><td><?php echo $ionar2[3]?></td><td><?php echo $valor.$ionar2[8]?></td><td><?php echo $ionar2[10]?></td><td><?php echo $ionar2[11]?></td><td><?php echo $ionar2[12]?></td><td><?php echo $ionar2[4]?></td><td><?php echo $ionar[1]?></td>
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