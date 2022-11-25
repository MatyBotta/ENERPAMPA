<!DOCTYPE html>
         <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñoagregarprod.css" />
            
          </head>
         <body>  
<?php
include("db.php");
if(!isset($_SESSION))
{
    session_start();
}
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo ;
$comprobacion = "SELECT Nombre, Marca, ID, Codigo from productos where Codigo = '$codigo' or Codigo like '%R_=$codigo'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    $sel2 = "SELECT * from carac_prod where ID_prod = $info[2]";
    $ecc2 =  $conexion -> query($sel2);
    $carac = $ecc2 -> fetch_array();
    ?>
    <section class="datos">
    <p> El codigo <?php echo $codigo ?> ya fue ingresado anteriormente</p>
    <hr>
    <?php
    ?>
    <p> Nombre: <?php echo $info[0] ?></p>
    <p> Marca: <?php echo $info[1] ?></p>
    <p> ID: <?php echo $info[2] ?></p>
    <p> Caracterisitcas basicas: <?php echo $carac[1] ?>, <?php echo $carac[2] ?>, <?php echo $carac[3] ?></p>
    <hr>
    <?php
    $comprobacion = "SELECT Count(*) from productos where Codigo like '%R_=$codigo'and Codigo > '$info[3]'";
    $revisar =  $conexion -> query($comprobacion);
    $visado = $revisar -> fetch_array();
    if($visado[0] != 0)
    {
        for($i = 1; $i <= $visado[0]; $i++)
        {
        $a = $visado[0] + 1;
        $_SESSION['prod'] = 'R'.$a.'='.$codigo;
        $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo = 'R$i=$codigo'";
        $revisar2 =  $conexion -> query($comprobacion2);
        $info2 = $revisar2 -> fetch_array();
        $sel2 = "SELECT * from carac_prod where ID_prod = $info2[2]";
        $ecc2 =  $conexion -> query($sel2);
        $carac = $ecc2 -> fetch_array();
        if(empty($info2[0]) === false)
        {
            ?>
            <p> Nombre: <?php echo $info2[0] ?></p>
            <p> Marca: <?php echo $info2[1] ?></p>
            <p> ID: <?php echo $info2[2] ?></p>
            <p> Caracterisitcas basicas: <?php echo $carac[1] ?>, <?php echo $carac[2] ?>, <?php echo $carac[3] ?></p>
            <hr>
            <?php
        }
        else
        {
            $visado[0] ++;
        }
        }
    ?> 

    <p>Si el producto que quiere ingresar no se encuentra y desea repetir el codigo presione "Continuar", si fue un error seleccione "Cancelar".</p>
    <button><a href = "agregar_datos_productos.php">Continuar</a></button>
    <button><a href = "agregar-producto.html">Cancelar</a></button>
    <?php
    }
    else
    {
        $pos = strpos($info[3], '=');
        if($pos === true)
        {
            $cod = 0; 
            $i = 0;
            while($cod < $info[3])
            {
                $i ++;
                $cod = 'R'.$i.'='.$codigo;
            }
            $_SESSION['prod'] = $cod;
        }
        else
        {
            $_SESSION['prod'] = 'R1='.$codigo;
        }
        ?> 
        <p>Si este no es el producto que quiere ingresar y desea repetir el codigo presione "Continuar", si fue un error seleccione "Cancelar".</p>
        <button><a href = "agregar_datos_productos.php">Continuar</a></button>
        <button><a href = "agregar-producto.html">Cancelar</a></button>
        </section>
        </body>
        </html>
        <?php
    }
}
else
{
    include("agregar_datos_productos.php");
}