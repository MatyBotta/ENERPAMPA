<?php
session_start();
include("db.php");
$x = 0;
$var = $_POST['var'];
$seleccionar = "SELECT ID FROM productos where ID = $var";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
if($info[0] === $var)
{
    $seleccionar = "SELECT * FROM carrito where ID_prod = $var and Mail = $_SESSION[mail]";
    $elegir =  $conexion -> query($seleccionar);
    $info = $elegir -> fetch_array();
    if($info[0] === $var)
    {
        $actualizacion = "UPDATE carrito set Cantidad = Cantidad + 1 where ID_prod = $var and Mail = '$_SESSION[mail]'";
        $update =  $conexion -> query($actualizacion);
        // agregado un item mas del producto
        $x = 60;
        $_SESSION['x'] = $x;
        include("xxxxx.php"); 
    }
    else
    {
        // producto nuevo al carrito de usuario
        $in = "INSERT INTO carrito (ID_prod, Mail, Cantidad) values 
        ($var, '$_SESSION[mail]', 1)";
        $con =  $conexion -> query($in);
    }
}
else
{
    // producto no existente
    $x = 80;
    $_SESSION['x'] = $x;
    include("xxxxx.php");
}