<!DOCTYPE html>
         <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñodesafprod.css"/>
            <link rel="stylesheet" href="diseñoagregarprod.css"/>
          </head>
         <body>  
<?php
include("db.php");
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_GET['cliente']))
{
    $cliente = $_POST['cliente'];
    $_SESSION['cliente'] = $cliente;
    $comprobacion = "SELECT * from usuario where Mail = '$cliente' and Tipo = 'Cliente'";
    $revisar =  $conexion -> query($comprobacion);
    $info = $revisar -> fetch_array();
    if(empty($info[0]) === true)
    {
        echo "No existe usuario con ese mail";
    }
    else
    {
        ?>
        <section class="editar">
            <p> ¿Desea eliminar a:</p>
            <p> Nombre y Apellido: <?php echo $info[2] . " " . $info[3] ?></p>
            <p> Mail: <?php echo $info[0] ?></p>
            <button onclick = "window.location.href='eliminar_cliente.php?id_pedido=<?php echo $cliente;?>'">Continuar</a></button>
            <button><a href = "eliminar_cliente.html">Cancelar</a></button>
            </section>
        <?php
    }
}
else
{
    $cliente = $_GET['cliente'];
    $delete = "DELETE from usuario where Mail = '$cliente' and Tipo = 'Cliente'";
    $done =  $conexion -> query($delete);
    $delete2 = "DELETE from ingresos where Mail = '$cliente'";
    $done2 =  $conexion -> query($delete2);
    $delete3 = "DELETE from carrito where Mail = '$cliente'";
    $done3 =  $conexion -> query($delete3);
    $delete4 = "DELETE from pedido where Mail = '$cliente'";
    $done4 =  $conexion -> query($delete4);
    echo "Cliente eliminado con exito";
}
