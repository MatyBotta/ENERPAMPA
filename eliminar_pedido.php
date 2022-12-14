<!DOCTYPE html>
<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="diseñodesafprod.css"/>
            <link rel="stylesheet" href="diseñoagregarprod.css"/>
            <title>SECCION PRODUCTO</title>
          </head> 
<body> 
<?php

if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
if(!isset($_GET['x']))
{
    $ID = $_GET["id_pedido"];
    $_SESSION['ID'] = $ID;
    ?>
    <section class="editar">
    <h2> ¿Está seguro de eliminar el pedido Nº <?PHP ECHO $ID ?>?</h2>
    <button onclick = "window.location.href='eliminar_pedido.php?x=1'">Continuar</a></button>
    <button><a href = "ver_pedidos.php">Cancelar</a></button>
    </section>
    <?php
}
else
{
    $ID = $_SESSION['ID'];
    $carrito2 = "DELETE from carrito where Pedido = $ID";
    $shop2 =  $conexion -> query($carrito2);
    $delete = "DELETE from pedido where ID = $ID";
    $done =  $conexion -> query($delete);
    if($shop === true && $done === true)
    {
        ?>
        <section class="msg">
        <h2>Producto eliminado exitosamente.</h2>
        <button onclick = "window.location.href='eliminar_pedido.php?x=1'">Continuar</a></button>
        <button><a href = "ver_pedidos.php">Cancelar</a></button>
        </section>
        <?php
        header('Location:ver_pedidos.php');
    }
}
