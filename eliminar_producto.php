<!DOCTYPE html>
         <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñodesafprod.css" />
            
          </head>
         <body>  
<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$codigo = $_POST['prod'];
$comprobacion = "SELECT Nombre, Marca, ID from productos where Codigo like '%$codigo' and Estado != 'Eliminado'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    $_SESSION["info"] = $info[2];
    $comprobacion = "SELECT Count(*) from productos where Codigo like '%R_=$codigo' and Estado != 'Eliminado'";
    $revisar =  $conexion -> query($comprobacion);
    $visado = $revisar -> fetch_array();
    if($visado[0] != 0)
    {
        ?>
        <p>Seleccione el producto que desea eliminar</p>
        <form action="eliminacion.php" method="post"> 
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
    }
    else
    {
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <section class="principal">
        <h2>¿Desea eliminar el producto de codigo <?php echo $codigo ?>?</h2>
        <h3> Nombre: <?php echo $info[0] ?></h3>
        <h3> Marca: <?php echo $info[1] ?></h3>
        <h3> ID: <?php echo $info[2] ?></h3>
        <button><a href = "eliminacion.php">Confirmar</a></button>
        <button><a href = "eliminar-producto.html">Cancelar</a></button>
        </section>
        <?php
    }
}
else
{
    ?>
    <section class="msg">
    <h2>No existe un producto con determinado codigo.</h2>
    <button><a href = "eliminar-producto.html">Ingresar otro codigo</a></button>
    </section>
    </body>
    <?php
}