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
if(!isset($_GET['y']))
{
    $ID = $_GET["id_pedido"];
    $_SESSION['ID'] = $ID;
    ?>
    <section class="editar">
    <p> ¿Está seguro de que desea dar por concretado el pedido Nº <?PHP ECHO $ID ?>?</p>
    <button onclick = "window.location.href='concretado.php?y=1'">Continuar</a></button>
    <button><a href = "ver_pedidos.php">Cancelar</a></button>
    </section>
    <?php
}
else
{
    $ID = $_SESSION['ID'];
    $contar = "SELECT count(*) from carrito where Pedido = $ID";
    $contado =  $conexion -> query($contar);
    $var = $contado -> fetch_array();
    $id_prod = 0;
    for($i = 0; $i < $var[0]; $i ++)
    {
        $carrito = "SELECT ID_Prod, Cantidad from carrito where ID_Prod > $id_prod order by ID_Prod asc";
        $shop =  $conexion -> query($carrito);
        $ionar = $shop -> fetch_array();
        $id_prod = $ionar[0];
        $update = "UPDATE productos set Cantidad = Cantidad - $ionar[1] where ID = $id_prod";
        $done2 =  $conexion -> query($update);
    }
    $carrito2 = "DELETE from carrito where Pedido = $ID";
    $shop2 =  $conexion -> query($carrito2);
    $delete = "DELETE from pedido where ID = $ID";
    $done =  $conexion -> query($delete);
    echo "¡Pedido concretado!";
    header('Location:ver_pedidos.php');
}
