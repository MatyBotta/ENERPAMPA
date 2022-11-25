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
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$codigo = $_POST['prod'];
$comprobacion = "SELECT Nombre, Marca, ID, Codigo from productos where Codigo = '$codigo'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === true)
{
    $comprobacion = "SELECT Nombre, Marca, ID, Codigo from productos where Codigo like '%R_=$codigo' order by Codigo asc";
    $revisar =  $conexion -> query($comprobacion);
    $info = $revisar -> fetch_array();
}
if(empty($info[0]) === false)
{
    $_SESSION["info"] = $info[2];
    $comprobacion = "SELECT Count(*) from productos where Codigo like '%R_=$codigo'";
    $revisar =  $conexion -> query($comprobacion);
    $visado = $revisar -> fetch_array();
    $sel2 = "SELECT * from carac_prod where ID_prod = $info[2]";
    $ecc2 =  $conexion -> query($sel2);
    $carac = $ecc2 -> fetch_array();
    if(empty($visado[0]) === false)
    {
        for($i = 1; $i <= $visado[0]; $i++)
        {
            $sel2 = "SELECT * from carac_prod where ID_prod = $info[2]";
            $ecc2 =  $conexion -> query($sel2);
            $carac = $ecc2 -> fetch_array();
            ?>
           <p>Seleccione el producto que desea eliminar permanentemente</p>
            <br>
            <form action="edicion.php" method="post"> 
            <input type="radio" id="A" value= <?php echo $info[2] ?> name="eleccion" ><label for="A"><?php echo $info[0] ?>, <?php echo $info[1] ?>, ID: <?php echo $info[2] ?>, <p> Caracterisitcas basicas: <?php echo $carac[1] ?>, <?php echo $carac[2] ?>, <?php echo $carac[3] ?></p></label>
            <br>
            <?php
            $info2[2] = 0;
            for($i = 1; $i <= $visado[0]; $i++)
            {
                $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo like '%R_=$codigo' and Estado != 'Eliminado' and ID > $info2[2] order by ID asc";
                $revisar2 =  $conexion -> query($comprobacion2);
                $info2 = $revisar2 -> fetch_array();
                $sel2 = "SELECT * from carac_prod where ID_prod = $info2[2]";
                $ecc2 =  $conexion -> query($sel2);
                $carac2 = $ecc2 -> fetch_array();
                ?>
                <input type="radio" id="A" value= <?php echo $info2[2] ?> name="eleccion" ><label for="A"><?php echo $info2[0] ?>, <?php echo $info2[1] ?>, ID: <?php echo $info2[2] ?>, <p> Caracterisitcas basicas: <?php echo $carac2[1] ?>, <?php echo $carac2[2] ?>, <?php echo $carac2[3] ?></p></label>
                <?php
            }
            ?>
            <button type="submit">Enviar</button>
            </form >
        </section>
            <?php
        }
    ?> 
    <?php
    }
    else
    {
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <section class="editar">
        <p> El codigo ingresado pertenece a:</p>
        <p> Nombre: <?php echo $info[0] ?></p>
        <p> Marca: <?php echo $info[1] ?></p>
        <p> ID: <?php echo $info[2] ?></p>
        <p> Caracterisitcas basicas: <?php echo $carac[1] ?>, <?php echo $carac[2] ?>, <?php echo $carac[3] ?></p>
        <button><a href = "definicion.php">Continuar</a></button>
        <button><a href = "definitivo.html">Cancelar</a></button>
        </section>
        <?php  
    }
}
else
{
    ?>
    <section class="msg">
    <h2>No existe un producto con determinado codigo.</h2>
    <br>
    <br>
    <a href = "definitivo.html">Ingresar otro codigo</a>
    </section>
    </body>
    <?php
}
