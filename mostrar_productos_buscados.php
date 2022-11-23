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
$categoria = $_SESSION['categoria'];
if(empty($_POST['prod']) == false)
{
    $busqueda = $_POST['prod'];
    $_SESSION['prod'] = $busqueda; 
}
else
{
    $busqueda = $_SESSION['prod'];
}
$palabras = explode(" ", $busqueda);
$cant = count($palabras);
if($cant === 1)
{
    $hola = "SELECT count(*) FROM productos p inner join carac_prod c
    WHERE p.Categoria = '$categoria' and p.Estado = 'Vigente'and p.ID = c.ID_Prod and (p.Nombre like '%$busqueda%' or p.Marca like '%$busqueda%' or p.Moneda like '%$busqueda%' or c.Caracteristica like '%$busqueda%') ";
    $con =  $conexion -> query($hola);
    $visado = $con -> fetch_array();
}
elseif ($cant > 1)
{
        $hola = "SELECT count(*) FROM productos p inner join carac_prod c
        WHERE p.Categoria = '$categoria' and p.ID = c.ID_Prod and p.Estado = 'Vigente' ";
        $hola2 = "";
        for($i = 0; $i < $cant; $i ++)
            {
                $hola2 .= " and (p.Nombre like '%$palabras[$i]%' or p.Marca like '%$palabras[$i]%' or p.Moneda like '%$palabras[$i]%' or c.Caracteristica like '%$palabras[$i]%') ";
            }
        $hola .= $hola2;
        $con =  $conexion -> query($hola);
        $visado2 = $con -> fetch_array();
    }
else
{
    echo "No ha realizado ninguna busqueda";
}
if(empty($_POST["var"]) == false)
    {
        if(empty($_SESSION['mail']) == false)
        {
            $var = $_POST['var'];

            $mail = $_SESSION['mail'];
            $validar = "SELECT * FROM carrito where ID_Prod = $var and Mail = '$mail'";
            $validacion =  $conexion -> query($validar);
            $ok = $validacion -> fetch_array();
            if(empty($ok) === false)
            {
                $mas = "UPDATE carrito set Cantidad = Cantidad + 1 where ID_Prod = $var and Mail = '$mail'";
                $total =  $conexion -> query($mas);
            }
            else
            {
                $agregar = "INSERT into carrito (ID_Prod, Mail, Cantidad) values ($var, '$mail', 1)";
                $agregado =  $conexion -> query($agregar);
            }
        }
        else
        {
            include("iniciar_sesion2.html");
            $aa = 1;
        }
    }
if(empty($aa) === true)
{
    ?>
    <a href = "index.php">Volver</a>
    <a href = "Mostrar_productos.php">Ver todos los productos</a>
    <h1><?php echo $categoria ?> </h1>
    <form action="mostrar_productos_buscados.php" method="post"  > 
        <br>
        <h3>Buscar  :</h3>   
        <p><input class="controls2" type="text" name="prod" id="prod"></p> 
        <ul><button type="submit"><i class="fa-solid fa-right-to-bracket"></i>Ingresar</button></ul>
</form>
    <table border = 1>
    <tr><td>Nombre</td><td>Marca</td><td>Valor</td><td>Fecha del valor</td><td>Moneda</td><td>IVA</td><td>Caracteristica 1</td><td>Carac. 2</td><td>Carac. 3</td><td>Carac. 4</td><td>Carac. 5</td><td>Carac. 6</td><td>Imagen</td>
    <?php
    $ID = 0;
    if(empty($visado[0]) === false)
    {
       
        for($i = 0; $i < $visado[0]; $i ++)
        {
            $sel = "SELECT * from  productos p inner join carac_prod c
            WHERE p.Categoria = '$categoria' and p.Estado = 'Vigente'and p.ID = c.ID_Prod and (p.Nombre like '%$busqueda%' or p.Marca like '%$busqueda%' or p.Moneda like '%$busqueda%' or c.Caracteristica like '%$busqueda%')
            and ID > $ID order by ID asc";
            $ecc =  $conexion -> query($sel);
            $ionar = $ecc -> fetch_array();
            if(empty($ionar[0]) === false)
            {
                $ID = $ionar[0];
                if(empty($_SESSION['mail']) == false)
                {
                    $agarrar = "SELECT Cantidad from carrito where ID_prod = $ID and Mail = '$_SESSION[mail]'";
                    $agarrado =  $conexion -> query($agarrar);
                    $taken = $agarrado -> fetch_array();
                    if(empty($taken[0]) === true)
                    {
                        $taken[0] = 0;
                    }
                }
                $contar2 = "SELECT count(*) from carac_prod where ID_prod = $ionar[0]";
                $con2 =  $conexion -> query($contar2);
                $visado3 = $con2 -> fetch_array();
                $ID_carac = 0;
                if($ionar[11] == "Pesos")
                {
                    $valor = "$";
                }
                else
                {
                    $valor = "U$"."S";
                }
                for($x = 0; $x < $visado3[0]; $x ++)
                {
                    $sel2 = "SELECT * from carac_prod where ID_prod = $ionar[0] and ID_carac_prod > $ID_carac order by ID_carac_prod asc";
                    $ecc2 =  $conexion -> query($sel2);
                    $ionar2 = $ecc2 -> fetch_array();
                    $ID_carac = $ionar2[2];
                    $carac[$x] = $ionar2[1];
                }
                for($x = 0; $x < 6; $x ++)
                {
                    if(empty($carac[$x]) === true)
                    {
                        $carac[$x] = '-';
                    }
                }
                $imagen = $ionar[7];
                $img="imagenes_subidas/".$imagen;
                ?>
                <form action="mostrar_productos.php" method="post"> 
                <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[0]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td><td><?php echo '<img src= "'.$img.'">'?></td><td><button type="submit" id = "var" name = "var" value = <?php echo $ionar[0]?>>Añadir al carrito</button></td><?php if(empty($_SESSION['mail']) == false){?><td>Al carrito: <?php echo $taken[0]?></td><?php } ?></tr>
                <?php
                $carac[0] = null;
                $carac[1] = null;
                $carac[2] = null;
                $carac[3] = null;
                $carac[4] = null;
                $carac[5] = null;
            }
        }
    }
    
    $ID = 0;
    if(empty($visado2[0]) === false)
    {
        for($i = 0; $i < $visado2[0]; $i ++)
    {
        $sel = "SELECT * FROM productos p inner join carac_prod c
        WHERE p.Categoria = '$categoria' and p.ID = c.ID_Prod and p.Estado = 'Vigente'";
        $hola2 = "";
        for($x = 0; $x < $cant; $x ++)
            {
                $hola2 .= " and (p.Nombre like '%$palabras[$x]%' or p.Marca like '%$palabras[$x]%' or p.Moneda like '%$palabras[$x]%' or c.Caracteristica like '%$palabras[$x]%') ";
            }
        $sel .= $hola2;
        $sel .=  " and p.ID > $ID order by p.ID asc";
        $ecc =  $conexion -> query($sel);
        $ionar = $ecc -> fetch_array();
        if(empty($ionar[0]) === false)
            {
        $ID = $ionar[0];
        if(empty($_SESSION['mail']) == false)
        {
            $agarrar = "SELECT Cantidad from carrito where ID_prod = $ID and Mail = '$_SESSION[mail]'";
            $agarrado =  $conexion -> query($agarrar);
            $taken = $agarrado -> fetch_array();
            if(empty($taken[0]) === true)
            {
                $taken[0] = 0;
            }
        }
        $contar2 = "SELECT count(*) from carac_prod where ID_prod = $ionar[0]";
        $con2 =  $conexion -> query($contar2);
        $visado3 = $con2 -> fetch_array();
        $ID_carac = 0;
        if($ionar[11] == "Pesos")
        {
            $valor = "$";
        }
        else
        {
            $valor = "U$"."S";
        }
        for($x = 0; $x < $visado3[0]; $x ++)
        {
            $sel2 = "SELECT * from carac_prod where ID_prod = $ionar[0] and ID_carac_prod > $ID_carac order by ID_carac_prod asc";
            $ecc2 =  $conexion -> query($sel2);
            $ionar2 = $ecc2 -> fetch_array();
            $ID_carac = $ionar2[2];
            $carac[$x] = $ionar2[1];
        }
        for($x = 0; $x < 6; $x ++)
        {
            if(empty($carac[$x]) === true)
            {
                $carac[$x] = '-';
            }
        }
        $imagen = $ionar[7];
        $img="imagenes_subidas/".$imagen;
        ?>
        <form action="mostrar_productos.php" method="post"> 
        <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[0]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td><td><?php echo '<img src= "'.$img.'">'?></td><td><button type="submit" id = "var" name = "var" value = <?php echo $ionar[0]?>>Añadir al carrito</button></td><?php if(empty($_SESSION['mail']) == false){?><td>Al carrito: <?php echo $taken[0]?></td><?php } ?></tr>
        <?php
        $carac[0] = null;
        $carac[1] = null;
        $carac[2] = null;
        $carac[3] = null;
        $carac[4] = null;
        $carac[5] = null;
    }
    }
    }
    ?>
    </table>
</body>
</html>
    <?php
}