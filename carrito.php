<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$mail = $_SESSION['mail'];
$contar = "SELECT count(*) from carrito where Mail = '$mail'";
$contado =  $conexion -> query($contar);
$var = $contado -> fetch_array();
?> 
<h1>carrito </h1>
<a href = "index.php"> Volver </a>
<?php
if(empty($var[0]) === false)
{
    ?>
    <table border = "1"><td>Nombre</td><td>Marca</td><td>Valor</td><td>Fecha del valor</td><td>Moneda</td><td>IVA</td><td>Codigo</td><td>Cantidad</td><td>Imagen</td></tr>
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
        <tr><td><?php echo $ionar2[2]?></td><td><?php echo $ionar2[3]?></td><td><?php echo $valor.$ionar2[8]?></td><td><?php echo $ionar2[10]?></td><td><?php echo $ionar2[11]?></td><td><?php echo $ionar2[12]?></td><td><?php echo $ionar2[4]?></td><td><?php echo $ionar[1]?></td><td><?php echo '<img src= "'.$img.'">'?></td></tr>
        <?php
    }
    ?>
    </table>
    <?php
}
else
{
    echo $_SESSION['mail'];
    echo "Aun no ha seleccionado ningun producto";
}
?>
<a href = "Excelcarrito.php">Exportar a Excel</a>