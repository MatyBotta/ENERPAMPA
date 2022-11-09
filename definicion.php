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
    $eliminar  = "DELETE from productos where ID = $ID";
    $delete =  $conexion -> query($eliminar);
    $eliminar2  = "DELETE from carac_prod where ID_prod = $ID";
    $delete2 =  $conexion -> query($eliminar2);
    if($delete === true && $delete2 === true)
    {
        ECHO ":)";
    }
}
else
{
    ?>
    <p> No ingreso ninguna opcion. </p>
    <a href = "definitivo.html">Volver a ingresar codigo</a>
    <?php
}