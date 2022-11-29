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
<h1>Carrito</h1>
<a href = "index_cliente.html"> Volver </a>
<?php

if(empty($var[0]) === false)
{
    if(empty($_GET['product_id2']) == false)
{
    $var = $_GET['product_id2'];
    $mail = $_SESSION['mail'];
    $validar = "SELECT count(*) FROM carrito where ID_Prod = $var and Mail = '$mail'";
    $validacion =  $conexion -> query($validar);
    $ok = $validacion -> fetch_array();
    if(empty($ok[0]) === false)
    {
        $eli = "DELETE FROM carrito where ID_Prod = $var and Mail = '$mail'";
        $minar =  $conexion -> query($eli);
    }
    header('Location:carrito.php');
}
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
            <tr><td><?php echo $ionar2[2]?></td><td><?php echo $ionar2[3]?></td><td><?php echo $valor.$ionar2[8]?></td><td><?php echo $ionar2[10]?></td><td><?php echo $ionar2[11]?></td><td><?php echo $ionar2[12]?></td><td><?php echo $ionar2[4]?></td><td><?php echo $ionar[1]?></td><td><?php echo '<img src= "'.$img.'">'?></td><td><button onclick = "window.location.href='carrito.php?product_id2=<?php echo $ionar[0];?>'">Eliminar del carrito</button></td></tr>
            <?php
        }
    }
    ?>
    </table>
    <a href = "Excelcarrito.php">Exportar a Excel</a>
    <a href = "Pedido.php">Realizar pedido</a>
    <?php
}
else
{
    echo $_SESSION['mail'];
    echo "Aun no ha seleccionado ningun producto";
}
