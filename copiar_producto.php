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
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo;
$comprobacion = "SELECT Nombre, Marca, ID from productos where Codigo = '$codigo'  and Estado != 'Eliminado'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    $comprobacion2 = "SELECT Count(*) from productos where Codigo like '%R_=$codigo'  and Estado != 'Eliminado'";
    $revisar2 =  $conexion -> query($comprobacion2);
    $visado = $revisar2 -> fetch_array();
    if($visado[0] != 0)
    {
            ?>
            <p>Seleccione el producto que desea editar</p>
            <form action="copiado.php" method="post"> 
            <input type="radio" id="A" value= <?php echo $info[2] ?> name="eleccion" ><label for="A"><?php echo $info[0] ?>, <?php echo $info[1] ?>, ID: <?php echo $info[2] ?></label>
            <?php
            $info2[2] = 0;
            for($i = 1; $i <= $visado[0]; $i++)
            {
                $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo like '%R_=$codigo' and Estado != 'Eliminado' and ID > $info2[2] order by ID asc";
                $revisar2 =  $conexion -> query($comprobacion2);
                $info2 = $revisar2 -> fetch_array();
                ?>
                <input type="radio" id="A" value= <?php echo $info2[2] ?> name="eleccion" ><label for="A"><?php echo $info2[0] ?>, <?php echo $info2[1] ?>, ID: <?php echo $info2[2] ?></label>
                <?php
            }
            ?>
            <button type="submit">Enviar</button>
            </form>
            <?php
    ?> 
    
    <a href = "nuevo_producto_copiado.html">Cancelar</a>
    
    <?php
    }
    else
    {
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <section class="msg">
        <h2> El codigo ingresado pertenece a:</h2>
        <h2> Nombre: <?php echo $info[0] ?></h2>
        <h2> Marca: <?php echo $info[1] ?></h2>
        <h2> ID: <?php echo $info[2] ?></h2>
        <button><a href = "copiado.php">Continuar</a></button>
        <button><a href = "nuevo_producto_copiado.html">Cancelar</a></button>
    </section>
        <?php
    }
}
else
{
    echo "Codigo no registrado en el sistema";
}
?>
</body>
</html>
