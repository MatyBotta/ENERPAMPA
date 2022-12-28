<!DOCTYPE html>
         <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="tabla.css" />
            
          </head>
         <body>  
<?php
if(!isset($_SESSION))
{
    session_start();
}   
include("db.php");
if(empty($_POST['categoria']) === false)
{
    $categoria = $_POST['categoria'];
    $_SESSION['categoria'] = $categoria;
}
else
{
    $categoria = $_SESSION['categoria'];
}
$contar = "SELECT count(*) from productos where Categoria = '$categoria' and Estado = 'Vigente'";
$con =  $conexion -> query($contar);
$visado = $con -> fetch_array();   
if(empty($_SESSION['mail']) == false)
{
    $select = "SELECT Tipo from usuario where Mail = '$_SESSION[mail]'";
    $done =  $conexion -> query($select);
    $array = $done -> fetch_array();
    if($array[0] === 'Cliente') 
    {
        ?>
        <section class="menu">
        <a href = "index_cliente.html"> Volver </a>
        </section>
        <?php
    }
    else
    {
        ?>
        <section class="menu">
        <a href = "index_trabajador.html"> Volver </a>
        </section>
        <?php
    }
}
else
{
    ?>
     <section class="menu">
    <a href = "index.html"> Volver </a>
    </section>
    <?php
}   
if(empty($_GET['product_id2']) == false)
{
    echo "holaaaaa";
    $var = $_GET['product_id2'];
    $mail = $_SESSION['mail'];
    $validar = "SELECT count(*) FROM carrito where ID_Prod = $var and Mail = '$mail' and Pedido = 0";
    $validacion =  $conexion -> query($validar);
    $ok = $validacion -> fetch_array();
    if(empty($ok[0]) === false)
    {
        $eli = "DELETE FROM carrito where ID_Prod = $var and Mail = '$mail' and Pedido = 0";
        $minar =  $conexion -> query($eli);
    }
}
    ?>
   
    <h1><?php echo $categoria; ?> </h1>
    <form action="mostrar_productos_buscados.php" method="post"  > 
        <br>
        <h3>Buscar productos:</h3>   
        <p><input class="controls2" type="text" name="prod" id="prod"></p> 

</form>
    <table border = 1>
    <tr><th>Nombre</th><th>Marca</th><th>Valor</th><th>Fecha del valor</th><th>Moneda</th><th>IVA</th><th>Caracteristica 1</th><th>Carac. 2</th><th>Carac. 3</th><th>Carac. 4</th><th>Carac. 5</th><th>Carac. 6</th><th>Imagen</th>    <?php
    $ID = 0;
    for($i = 0; $i < $visado[0]; $i ++)
    {
        $sel = "SELECT * from productos where Categoria = '$categoria' and Estado = 'Vigente' and ID > $ID order by ID asc";
        $ecc =  $conexion -> query($sel);
        $ionar = $ecc -> fetch_array();
        $ID = $ionar[0];
        if(empty($_SESSION['mail']) == false)
        {
            $agarrar = "SELECT Cantidad from carrito where ID_prod = $ID and Mail = '$_SESSION[mail]' and Pedido = 0";
            $agarrado =  $conexion -> query($agarrar);
            $taken = $agarrado -> fetch_array();
            if(empty($taken[0]) === true)
            {
                $taken[0] = 0;
            }
        }
        $contar2 = "SELECT * from carac_prod where ID_prod = $ionar[0]";
        $con2 =  $conexion -> query($contar2);
        $carac = $con2 -> fetch_array();
        if($ionar[11] == "Pesos")
        {
            $valor = "$";
        }
        else
        {
            $valor = "U$"."S";
        }
        for($x = 0; $x <= 6; $x ++)
        {
            if(empty($carac[$x]) === true)
            {
                $carac[$x] = '-';
            }
        }
        $imagen = $ionar[7];
        $img="imagenes_subidas/".$imagen;
        ?>
        <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td><td><?php echo $carac[6]?></td><td><?php echo '<img src= "'.$img.'">'?></td> 
        <?php
        if(empty($_SESSION['mail']) == false)
        {
            ?>
            <td><button onclick = "window.location.href='agregar_carrito.php?product_id=<?php echo $ionar[0];?>'">Añadir al carrito</button></td>
            <td><button onclick = "window.location.href='mostrar_productos.php?product_id2=<?php echo $ionar[0];?>'">Eliminar del carrito</button></td>
            <?php
        }
        else
        {
            ?>
            <td><button onclick = "window.location.href='iniciar_sesion.php?x=<?php echo $ionar[0];?>'">Añadir al carrito</button></td>
            <?php
        }
        if(empty($_SESSION['mail']) == false){?><td>Al carrito: <?php echo $taken[0]?></td><?php } ?></tr>
        <?php
        $carac[1] = null;
        $carac[2] = null;
        $carac[3] = null;
        $carac[4] = null;
        $carac[5] = null;
        $carac[6] = null;
    }
     
    ?>
    </table>
</body>
</html>
    <?php