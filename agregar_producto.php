<?php
include("db.php");
if(!isset($_SESSION))
{
    session_start();
}
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo ;
$comprobacion = "SELECT Nombre, Marca, ID from productos where Codigo = '$codigo'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    ?>
    <p> El codigo <?php echo $codigo ?> ya fue ingresado anteriormente</p>
    <p> Nombre: <?php echo $info[0] ?></p>
    <p> Marca: <?php echo $info[1] ?></p>
    <p> ID: <?php echo $info[2] ?></p>
    <?php
    $comprobacion = "SELECT Count(*) from productos where Codigo like '%R_=$codigo' and Estado != 'Eliminado'";
    $revisar =  $conexion -> query($comprobacion);
    $visado = $revisar -> fetch_array();
    if($visado[0] != 0)
    {
        for($i = 1; $i <= $visado[0]; $i++)
        {
        $a = $visado[0] + 1;
        $_SESSION['prod'] = 'R'.$a.'='.$codigo;
        $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo = 'R$i=$codigo' and Estado != 'Eliminado'";
        $revisar2 =  $conexion -> query($comprobacion2);
        $info2 = $revisar2 -> fetch_array();
        if(empty($info2[0]) === false)
        {
            ?>
            <p> Nombre: <?php echo $info2[0] ?></p>
            <p> Marca: <?php echo $info2[1] ?></p>
            <p> ID: <?php echo $info2[2] ?></p>
            <?php
        }
        else
        {
            $visado[0] ++;
        }
        }
    ?> 
    <html>
    <body>
    <p>Si el producto que quiere ingresar no se encuentra y desea repetir el codigo presione "Continuar", si fue un error seleccione "Cancelar".</p>
    <a href = "agregar_datos_producto.php">Continuar</a>
    <a href = "agregar-producto.html">Cancelar</a>
    </body>
    </html>
    <?php
    }
    else
    {
        $_SESSION['prod'] = 'R1='.$codigo;
        ?> 
        <html>
        <body>
        <p>Si este no es el producto que quiere ingresar y desea repetir el codigo presione "Continuar", si fue un error seleccione "Cancelar".</p>
        <a href = "agregar_datos_producto.php">Continuar</a>
        <a href = "agregar-producto.html">Cancelar</a>
        </body>
        </html>
        <?php
    }
}
else
{
    include("agregar_datos_productos.php");
}