<!DOCTYPE html>
         <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="editar.css"/>
            <link rel="stylesheet" href="diseñoagregarprod.css"/>
            <link rel="stylesheet" href="diseñodesafprod.css"/>
          </head>
         <body>  
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
    if(empty($_SESSION['eleccion']) === false)
    {
        $ID = $_SESSION['eleccion'];
    }
    $_SESSION['ID'] = $ID;
    $comprobacion1 = "SELECT * from productos where ID = $ID";
    $revisar1 =  $conexion -> query($comprobacion1);
    $info1 = $revisar1 -> fetch_array();
    $comprobacion3 = "SELECT * from carac_prod where ID_prod = $ID";
    $revisar3 =  $conexion -> query($comprobacion3);
    $info3 = $revisar3 -> fetch_array();
?>
<div class="head">

<div class="logo">
    <img src="Imagenes/LOGO.ico" width="115" alt="">
</div>
<nav class="navbar">
</nav>
<a href="panel_control.html">Inicio</a>
</div>
<br>
<br>
<header>
<h2 id="title">Ingresar datos del producto a editar con codigo: <?php echo $info1[4] ?></h2>
</header>
            <div id="main-container">
            <br>
            <form action="subir_edicion.php" method="post" enctype = "multipart/form-data">
            <h3>Nombre</h3>
            <input step="any" type="text"  name="nombre" value="" placeholder = "<?php echo $info1[2]?>">           
        <br>
            <h3>Codigo</h3>
                <input step="any" type="text"  name="codigo" value="" placeholder = "<?php echo $info1[4]?>">           
            <br>
            <h3>Marca</h3>
            <input step="any" type="text" name="marca" value="" placeholder = "<?php echo $info1[3]?>">
            <br>
            <h3>Cantidad</h3>
            <input step="any" type="text" name="cantidad" value="" placeholder = "<?php echo $info1[5]?>">
        <fieldset id="cat">
        <legend>Categoria ("<?php echo $info1[1]?>" es la categoria actual)</legend>
        <input type="radio" id= 1 value= 1 name="cat"><label for="A">Control de Potencia</label>
        <input type="radio" id= 2 value= 2 name="cat"><label for="B">Automatización</label>
        <input type="radio" id= 3 value= 3 name="cat"><label for="C">Distribución eléctrica terciaria</label>
        <input type="radio" id= 4 value= 4 name="cat"><label for="D">Accesorios</label>
        <input type="radio" id= 5 value= 5 name="cat"><label for="E">Distribución eléctrica industrial y monitoreo de redes e instrumentos</label>
        <input type="radio" id= 6 value= 6 name="cat"><label for="F">Iluminacion</label>
</fieldset>
        <br>
            <h3>Caracteristicas</h3>
            <input type="text" name="carac1" value="" placeholder = "<?php echo $info3[1]?>">
            <input type="text" name="carac2" value="" placeholder = "<?php echo $info3[2]?>">
            <input type="text" name="carac3" value="" placeholder = "<?php echo $info3[3]?>">
            <?php
            if(empty($info3[4]) == true)
            {
                ?>
                <input type="text" name="carac4" value="" placeholder = "Caracteristica 4">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac4" value="" placeholder = "<?php echo $info3[4]?>">
                <?php
            }
            if(empty($info3[5]) == true)
            {
                ?>
                <input type="text" name="carac5" value="" placeholder = "Caracteristica 5">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac5" value="" placeholder = "<?php echo $info3[5]?>">
                <?php
            }
            if(empty($info3[6]) == true)
            {
                ?>
                <input type="text" name="carac6" value="" placeholder = "Caracteristica 6">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac6" value="" placeholder = "<?php echo $info3[6]?>">
                <?php
            }
        ?>
        <br>
            <h3>Imagen</h3>
            <input step="any" type="file" name="imagen" accept = "image/*" value="" placeholder = "<?php echo $info1[7]?>">
        <br>
        
            <h3>Precio</h3>
            <input step="any" type="number" name="precio" value="" placeholder = "<?php echo $info1[8]?>">
        <br>
        <h3> Fecha Precio</h3>
            <input step="any" type="date" name="fecha" placeholder = "<?php echo $info1[10]?>" value="">
        <br><br>
        <fieldset id="moneda">
        <legend>Moneda ("<?php echo $info1[11]?>" es la opcion actual)</legend>
        <input type="radio" id= 1 value= 1 name="moneda"><label for="A">Peso argentino</label>
        <input type="radio" id= 2 value= 2 name="moneda"><label for="B">Dolar estadounidense</label>
        </fieldset>
        <br>
        <fieldset id="IVA">
        <legend>Tipo de IVA ("<?php echo $info1[12]?>" es la opcion actual)</legend>
        <input type="radio" id= 1 value= 1 name="IVA"><label for="A">10.5%</label>
        <input type="radio" id= 2 value= 2 name="IVA"><label for="B">21%</label>
        </fieldset>
        <button type="submit">Enviar</button>
        <?php
        $_SESSION['eleccion'] = null;
        }
        else
        {
            ?>
                <section class="msg">
                <h2> NO INGRESO NINGUNA OPCION</h2>
                <button id="inicio"><a href = "editar-producto.html"><h2>Volver a ingresar codigo</h2></a></button>
            </section>
        </body>
        </html>
            <?php
        }