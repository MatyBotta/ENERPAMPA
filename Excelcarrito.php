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
    <!doctype html>
    <html>
        <body>
    
    <table border = "1">
    <section>   
    <h2 style="text-align:left; width:120px; height:80px;  font-weight:60; color:#000a35;">ENERPAMPA S.A.</h2>
    <h3 style="text-align:left;">Gral. Mansilla 640</h3><h3 style="text-align:right;">tvazquez@enerpampa.com -> 2106-0462</h3>              
    <h3 style="text-align:left;">(1752) Lomas del Mirador</h3><h3 style="text-align:right;">gleviu@enerpampa.com -> 7547-6554 </h3>     
    <h3 style="text-align:left;">ventas@enerpmapa.com</h3><h3 style="text-align:right;">cguglielmo@enerpampa.com -> 7533-2216</h3>   
   
    <td>Nombre</td><td>Marca</td><td>Valor</td><td>Fecha valor</td><td>Moneda</td><td>IVA</td><td>Codigo</td><td>Cant.</td></tr>
    <?php
    $ID = 0;
    for($i = 0; $i < $var[0]; $i ++)
    {
        $carrito = "SELECT ID_Prod, Cantidad from carrito where Mail = '$mail' and ID_Prod > $ID order by ID_Prod asc";
        $shop =  $conexion -> query($carrito);
        $ionar = $shop -> fetch_array();
        $ID = $ionar[0];
        $prod = "SELECT * from productos where ID = $ID";
        $stock =  $conexion -> query($prod);
        $ionar2 = $stock -> fetch_array();
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
        <tr><td><?php echo $ionar2[2]?></td><td><?php echo $ionar2[3]?></td><td><?php echo $valor.$ionar2[8]?></td><td><?php echo $ionar2[10]?></td><td><?php echo $ionar2[11]?></td><td><?php echo $ionar2[12]?></td><td><?php echo $ionar2[4]?></td><td><?php echo $ionar[1]?></td></tr>
        <?php
    }
    ?>
    </table>
    <p style="text-align: center;">Los valores son referenciales, por favor solicitar cotizacion.</p>
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