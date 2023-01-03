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
    WHERE p.Categoria = '$categoria' and p.Estado = 'Vigente'and p.ID = c.ID_Prod and (p.Nombre like '%$busqueda%' or p.Marca like '%$busqueda%' or p.Moneda like '%$busqueda%' or c.Caracteristica like '%$busqueda%' or c.Caracteristica2 like '%$busqueda%' or c.Caracteristica3 like '%$busqueda%' or c.Caracteristica4 like '%$busqueda%' or c.Caracteristica5 like '%$busqueda%' or c.Caracteristica6 like '%$busqueda%') ";
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
                $hola2 .= " and (p.Nombre like '%$palabras[$i]%' or p.Marca like '%$palabras[$i]%' or p.Moneda like '%$palabras[$i]%' or c.Caracteristica like '%$palabras[$i]%' or c.Caracteristica2 like '%$palabras[$i]%' or c.Caracteristica3 like '%$palabras[$i]%' or c.Caracteristica4 like '%$palabras[$i]%' or c.Caracteristica5 like '%$palabras[$i]%' or c.Caracteristica6 like '%$palabras[$i]%') ";
            }
        $hola .= $hola2;
        $con =  $conexion -> query($hola);
        $visado2 = $con -> fetch_array();
    }
else
{
    echo "No ha realizado ninguna busqueda";
}
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
                <a href = "mostrar_productos.php"> Volver a ver todos los productos</a>
                </section>
                <?php
            }
            else
            {
                ?>
                <section class="menu">
                <a href = "index_trabajador.html"> Volver </a>
                <a href = "mostrar_productos.php"> Volver a ver todos los productos</a>
                </section>
                <?php
            }
        }
        else
        {
            ?>
             <section class="menu">
            <a href = "index.html"> Volver </a>
            <a href = "mostrar_productos.php"> Volver a ver todos los productos</a>
            </section>
            <?php
        }
    if(empty($_GET['product_id2']) == false)
    {
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
    <section class="titulo">
    <h1><?php echo $categoria ?> </h1>
    <form action="mostrar_productos_buscados.php" method="post"  > 
        <br>
        <h3>Buscar productos:</h3>   
        <p><input class="controls2" type="text" name="prod" id="prod"></p> 
        <ul><button type="submit"><i class="fa-solid fa-right-to-bracket"></i>Ingresar</button></ul>
</form>
</section>
    <table border = 1>
    <tr><th>Nombre</th><th>Marca</th><th>Valor</th><th>Fecha del valor</th><th>Moneda</th><th>IVA</th><th>Caracteristica 1</th><th>Carac. 2</th><th>Carac. 3</th><th>Carac. 4</th><th>Carac. 5</th><th>Carac. 6</th><th>Imagen</th>    <?php
    
    $ID = 0;
    if(empty($visado[0]) === false)
    {
       
        for($i = 0; $i < $visado[0]; $i ++)
        {
            $sel = "SELECT * from  productos p inner join carac_prod c
            WHERE p.Categoria = '$categoria' and p.Estado = 'Vigente'and p.ID = c.ID_Prod and (p.Nombre like '%$busqueda%' or p.Marca like '%$busqueda%' or p.Moneda like '%$busqueda%' or c.Caracteristica like '%$busqueda%' or c.Caracteristica2 like '%$busqueda%' or c.Caracteristica3 like '%$busqueda%' or c.Caracteristica4 like '%$busqueda%' or c.Caracteristica5 like '%$busqueda%' or c.Caracteristica6 like '%$busqueda%')
            and ID > $ID order by ID asc";
            $ecc =  $conexion -> query($sel);
            $ionar = $ecc -> fetch_array();
            if(empty($ionar[0]) === false)
            {
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
                <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td>
                <td><?php echo $carac[6]?></td><td><?php echo '<img src= "'.$img.'">'?></td><td>
                <?php
                if(empty($_SESSION['mail']) == false)
                {
                    ?>
                    <button onclick = "window.location.href='agregar_carrito_buscado.php?product_id=<?php echo $ionar[0];?>'">Añadir al carrito</button></td>
                    <td><button onclick = "window.location.href='mostrar_productos_buscados.php?product_id2=<?php echo $ionar[0];?>'">Eliminar del carrito</button></td>
                    <?php
                }
                else
                {
                    ?>
                    <button onclick = "window.location.href='iniciar_sesion.php?x=<?php echo $ionar[0];?>'">Añadir al carrito</button></td>
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
                $hola2 .= " and (p.Nombre like '%$palabras[$x]%' or p.Marca like '%$palabras[$x]%' or p.Moneda like '%$palabras[$x]%' or c.Caracteristica like '%$palabras[$x]%' or c.Caracteristica2 like '%$palabras[$x]%' or c.Caracteristica3 like '%$palabras[$x]%' or c.Caracteristica4 like '%$palabras[$x]%' or c.Caracteristica5 like '%$palabras[$x]%' or c.Caracteristica6 like '%$palabras[$x]%') ";
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
        <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td>
        <td><?php echo $carac[6]?></td><td><?php echo '<img src= "'.$img.'">'?></td><td>
        <?php
        if(empty($_SESSION['mail']) == false)
        {
            ?>
            <button onclick = "window.location.href='agregar_carrito_buscado.php?product_id=<?php echo $ionar[0];?>'">Añadir al carrito</button></td>
            <td><button onclick = "window.location.href='mostrar_productos_buscados.php?product_id2=<?php echo $ionar[0];?>'">Eliminar del carrito</button></td>
            <?php
        }
        else
        {
            ?>
            <button onclick = "window.location.href='iniciar_sesion.php?x=<?php echo $ionar[0];?>''">Añadir al carrito</button></td>
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
    }
    }
    ?>
    </table>
</body>
</html>
