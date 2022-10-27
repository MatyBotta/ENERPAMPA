<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");

if(empty($_POST['eleccion']) === false || empty($_SESSION['eleccion']) === false)
{
    if(empty($_POST['eleccion']) === false)
    {
        $ID = $_POST['eleccion'];
    }
    elseif(empty($_SESSION['eleccion']) === false)
    {
        $ID = $_SESSION['eleccion'];
    }
}
$in = "UPDATE productos set Estado = 'Vigente' where ID = $ID";
$con =  $conexion -> query($in);
if(empty($con) === false)
{
    echo "producto reactivado";
}
else
{
    echo "ERROR";
}