<?php
if(!isset($_SESSION))
{
    session_start();
}   
include("db.php");
echo "holaaaaa";
    $var = $_GET['product_id'];
    $mail = $_SESSION['mail'];
    $validar = "SELECT count(*) FROM carrito where ID_Prod = $var and Mail = '$mail' and Pedido = 0";
    $validacion =  $conexion -> query($validar);
    $ok = $validacion -> fetch_array();
    if(empty($ok[0]) === false)
    {
        echo "okaaa";
        $mas = "UPDATE carrito set Cantidad = Cantidad + 1 where ID_Prod = $var and Mail = '$mail' and Pedido = 0";
        $total =  $conexion -> query($mas);
    }
    else
    {   
        echo "biennn";
        $agregar = "INSERT into carrito (ID_Prod, Mail, Cantidad) values ($var, '$mail', 1)";
        $agregado =  $conexion -> query($agregar);
    }
    header('Location:mostrar_productos_buscados.php');