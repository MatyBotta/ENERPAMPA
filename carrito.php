<!DOCTYPE html>
<html lang="es">
 
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="panel_control.css" />
            <link rel="stylesheet" href="tablaempleado.css" />
            <link rel="stylesheet" href="carrito.css"/>
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
$contar = "SELECT count(*) from carrito where Mail = '$mail' AND pedido = 0";
$contado =  $conexion -> query($contar);
$var = $contado -> fetch_array();
?> 
<body>
<h1>Carrito</h1>
<?php
 
if(empty($var[0]) === false)
{
    if(empty($_GET['product_id2']) == false)
    {
        $var = $_GET['product_id2'];
        $mail = $_SESSION['mail'];
        $validar = "SELECT count(*) FROM carrito where ID_Prod = $var and Mail = '$mail' and Pedido = 0";
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
    <table border = "1"><th>Item</th><th>Cantidad</th><th>Nombre</th><th>Marca</th><th>Codigo</th><th>Valor</th><th>Fecha del valor</th><th>Moneda</th><th>IVA</th></tr>
    <?php
    $ID = 0;
    for($i = 0; $i < $var[0]; $i ++)
    {
        $carrito = "SELECT ID_Prod, Cantidad from carrito where Mail = '$mail' and ID_Prod > $ID and Pedido = 0 order by ID_Prod asc";
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
            <tr><td><?php echo $i + 1?></td><td><?php echo $ionar[1]?></td><td><?php echo $ionar2[2]?></td><td><?php echo $ionar2[3]?></td><td><?php echo $ionar2[4]?></td><td><?php echo $valor.$ionar2[8]?></td><td><?php echo $ionar2[10]?></td><td><?php echo $ionar2[11]?></td><td><?php echo $ionar2[12]?></td><td><?php echo '<img src= "'.$img.'">'?></td><td><button onclick = "window.location.href='carrito.php?product_id2=<?php echo $ionar[0];?>'">Eliminar del carrito</button></td></tr>
            <?php
        }
    }
    ?> 
    </table>
    <button><a href = "Excelcarrito.php">Exportar a Excel</a></button>
    <button><a href = "Pedido.php">Realizar pedido</a></button>
</body>
    <?php
}
else
{ 
    ?>
    <section class="msg">
    <h2>Aun no ha seleccionado ningun producto.</h2>
        <button type="submit"><i class="fa-solid fa-right-to-bracket"><a href = "index_cliente.html"></i>Volver</button>
    </section>
    <?php
}
