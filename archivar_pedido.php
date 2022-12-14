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
    <h2> ¿Está seguro de archivar el pedido Nº <?PHP ECHO $ID ?>?</h2>
    <button onclick = "window.location.href='archivar_pedido.php?x=1'">Continuar</a></button>
    <button><a href = "ver_pedidos.php">Cancelar</a></button>
    </section>
    <?php
}
else
{
    $ID = $_SESSION['ID'];
    $update = "UPDATE pedido set Estado = 'Archivado' where ID = $ID";
    $done =  $conexion -> query($update);
    if($done === true)
    {
        echo "Archivado con exito";
        header('Location:ver_pedidos.php');
    }
}
