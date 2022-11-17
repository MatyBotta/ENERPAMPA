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
$_SESSION['eleccion'] = null;
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
        for($i = 1; $i <= $visado[0]; $i++)
        {
            $contar2 = "SELECT count(*) from carac_prod where ID_prod = $info[2]";
            $con2 =  $conexion -> query($contar2);
            $visado2 = $con2 -> fetch_array();
            $ID_carac = 0;
            for($x = 0; $x < $visado2[0]; $x ++)
            {
                $sel2 = "SELECT * from carac_prod where ID_prod = $info[2] and ID_carac_prod > $ID_carac order by ID_carac_prod asc";
                $ecc2 =  $conexion -> query($sel2);
                $ionar2 = $ecc2 -> fetch_array();
                $ID_carac = $ionar2[2];
                $carac[$x] = $ionar2[1];
            }
            ?>
            <div class="head">

    <div class="logo">
    <img src="Imagenes/LOGO.ico" width="115" alt="">
    </div>
    <nav class="navbar">
    <a href="panel_control.html">Inicio</a>
    </nav>
    </div>
    <br>
    <br>
            <section class="selec">
            <p allign=center>Seleccione el producto que desea editar</p>
            <br>
            <form action="edicion.php" method="post"> 
            <input type="radio" id="A" value= <?php echo $info[2] ?> name="eleccion" ><label for="A"><?php echo $info[0] ?>, <?php echo $info[1] ?>, ID: <?php echo $info[2] ?>, <p> Caracterisitcas basicas: <?php echo $carac[0] ?>, <?php echo $carac[1] ?>, <?php echo $carac[2] ?></p></label>
            <br>
            <?php
            $info2[2] = 0;
            for($i = 1; $i <= $visado[0]; $i++)
            {
                $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo like '%R_=$codigo' and Estado != 'Eliminado' and ID > $info2[2] order by ID asc";
                $revisar2 =  $conexion -> query($comprobacion2);
                $info2 = $revisar2 -> fetch_array();
                $contar2 = "SELECT count(*) from carac_prod where ID_prod = $info[2]";
                $con2 =  $conexion -> query($contar2);
                $visado2 = $con2 -> fetch_array();
                $ID_carac = 0;
                for($x = 0; $x < $visado2[0]; $x ++)
                {
                    $sel2 = "SELECT * from carac_prod where ID_prod = $info2[2] and ID_carac_prod > $ID_carac order by ID_carac_prod asc";
                    $ecc2 =  $conexion -> query($sel2);
                    $ionar2 = $ecc2 -> fetch_array();
                    $ID_carac = $ionar2[2];
                    $carac[$x] = $ionar2[1];
                }
                ?>
                <input type="radio" id="A" value= <?php echo $info2[2] ?> name="eleccion" ><label for="A"><?php echo $info2[0] ?>, <?php echo $info2[1] ?>, ID: <?php echo $info2[2] ?>, <p> Caracterisitcas basicas: <?php echo $carac[0] ?>, <?php echo $carac[1] ?>, <?php echo $carac[2] ?></p></label>
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
        $contar2 = "SELECT count(*) from carac_prod where ID_prod = $info[2]";
        $con2 =  $conexion -> query($contar2);
        $visado2 = $con2 -> fetch_array();
        $ID_carac = 0;
        for($x = 0; $x < $visado2[0]; $x ++)
        {
            $sel2 = "SELECT * from carac_prod where ID_prod = $info[2] and ID_carac_prod > $ID_carac order by ID_carac_prod asc";
            $ecc2 =  $conexion -> query($sel2);
            $ionar2 = $ecc2 -> fetch_array();
            $ID_carac = $ionar2[2];
            $carac[$x] = $ionar2[1];
        }
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <section class="editar">
        <p> El codigo ingresado pertenece a:</p>
        <p> Nombre: <?php echo $info[0] ?></p>
        <p> Marca: <?php echo $info[1] ?></p>
        <p> ID: <?php echo $info[2] ?></p>
        <p> Caracterisitcas basicas: <?php echo $carac[0] ?>, <?php echo $carac[1] ?>, <?php echo $carac[2] ?></p>
        <button><a href = "edicion.php">Continuar</a></button>
        <button><a href = "editar-producto.html">Cancelar</a></button>
        </section>
        <?php  
    }
}
else
{   
?>
<div class="editar">
    <p>Codigo no registrado en el sistema</p>
    <button><a href = "editar-producto.html">Volver a inicio</a></button>
</div>
<?php  
}
?>
</body>
</html>
