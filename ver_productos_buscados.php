<?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="tablaempleado.css" />
            <link rel="stylesheet" href="panel_control.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          </head>
          <style>
            *{
    margin: 0;
    padding: 0;
    text-decoration: none;
}

body{
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Empieza el menu  */
.sidebar{
    position: fixed;
    background: #516ba1;
    width: 350px;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
}

.sidebar h2{
    text-align: center;
    font-size: 20px;
    text-transform: uppercase;
    color: #ffffff;
    background: #516ba1;
    padding: 20px;
    font-weight: bold;
}


.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a{
    color: #ffffff;
    padding: 0 30px;

}
.sidebar ul li a:hover{
    color: #000000;
    margin-left: 20px;
    transition: 0.4s;
}

/* Termina el menu  */
          </style>
          <body>
            <h2 class="title" id="productos">Seleccionar alguna opcion</h2>
            <hr>
            <div class="sidebar">
            <a href = "index_trabajador.html"><img src="imagenes/LOGO.ico"width="80" alt=""></a>
              <ul class="nav">
                <li>
                  <a href="agregar-producto.html">
                    <i class="fa-solid fa-plus"></i>
                    <span>Ingresar producto nuevo</span>
                  </a>
                </li>
                <li>
                  <a href="eliminar-producto.html">
                    <i class="fa-solid fa-minus"></i>
                    <span>Desafectar producto</span>
                  </a>
                </li>
                <li>
                  <a href="editar-producto.html">
                    <i class="fa-solid fa-pen"></i>
                    <span>Editar producto</span>
                  </a>
                </li>
                <li>
                  <a href="volver-activar-producto.html">
                    <i class="fas fa-cog"></i>
                    <span>Volver a activar producto</span>
                  </a>
                </li>
                <li>
                  <a href="nuevo_producto_copiado.html">
                    <i class="fa-solid fa-circle-up"></i> 
                    <span>Agregar productos en base a otros</span>
                  </a>
                </li>
                <li>
                    <a href="definitivo.html">
                      <i class="fa-solid fa-trash"></i>
                      <span>Eliminar definitvamente producto</span>
                    </a>
                  </li>
                  <li>
                    <a href="ver_pedidos.php">
                      <i class="fa-solid fa-list-ul"></i>
                      <span>Ver pedidos</span>
                    </a>
                  </li>
                  <li>
                    <a href="ver_usuarios.php">
                      <i class="fa-solid fa-users"></i>
                      <span>Ver usuarios que ingresaron</span>
                    </a>
                  </li>
                  <li>
                    <a href="ver_productos.php">
                      <i class="fa-solid fa-trash"></i>
                      <span>Ver todos los productos </span>
                    </a>
                  </li>
                  <li>
                    <a href="eliminar_cliente.html">
                      <i class="fa-solid fa-user-minus"></i>
                      <span>Eliminar clientes</span>
                    </a>
                  </li>
                  <li>
                    <a href="crear_trabajador.html">
                      <i class="fa-solid fa-user-pen"></i>
                      <span>Crear usuario trabajador</span>
                    </a>
                  </li>
                <li>
                    <a href="index.php">
                      <i class="fa-solid fa-house"></i>
                      <span>Volver</span>
                    </a>
                  </li>
              </ul>
            </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include("db.php");
$contar = "SELECT count(*) from productos";
$con =  $conexion -> query($contar);
$visado = $con -> fetch_array();
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
    WHERE p.ID = c.ID_Prod and (p.Estado like '%$busqueda%' or p.Cantidad like '%$busqueda%' or p.ID like '%$busqueda%' or p.Codigo like '%$busqueda%' or p.Categoria like '%$busqueda%' or p.Nombre like '%$busqueda%' or p.Marca like '%$busqueda%' or p.Moneda like '%$busqueda%' or c.Caracteristica like '%$busqueda%' or c.Caracteristica2 like '%$busqueda%' or c.Caracteristica3 like '%$busqueda%' or c.Caracteristica4 like '%$busqueda%' or c.Caracteristica5 like '%$busqueda%' or c.Caracteristica6 like '%$busqueda%') ";
    $con =  $conexion -> query($hola);
    $visado = $con -> fetch_array();
}
elseif ($cant > 1)
{
        $hola = "SELECT count(*) FROM productos p inner join carac_prod c
        WHERE p.ID = c.ID_Prod ";
        $hola2 = "";
        for($i = 0; $i < $cant; $i ++)
            {
                $hola2 .= " and (p.Estado like '%$palabras[$i]%' or p.Cantidad like '%$palabras[$i]%' or p.ID like '%$palabras[$i]%' or p.Codigo like '%$palabras[$i]%' or p.Categoria like '%$palabras[$i]%' or p.Nombre like '%$palabras[$i]%' or p.Marca like '%$palabras[$i]%' or p.Moneda like '%$palabras[$i]%' or c.Caracteristica like '%$palabras[$i]%' or c.Caracteristica2 like '%$palabras[$i]%' or c.Caracteristica3 like '%$palabras[$i]%' or c.Caracteristica4 like '%$palabras[$i]%' or c.Caracteristica5 like '%$palabras[$i]%' or c.Caracteristica6 like '%$palabras[$i]%') ";
            }
        $hola .= $hola2;
        $con =  $conexion -> query($hola);
        $visado2 = $con -> fetch_array();
    }
else
{
    echo "No ha realizado ninguna busqueda";
}
if(empty($aa) === true)
{
    ?>
    <form action="ver_productos_buscados.php" method="post"  > 
        <br>
        <h3>Buscar  :</h3>   
        <p><input class="controls2" type="text" name="prod" id="prod"></p> 
        <ul><button type="submit"><i class="fa-solid fa-right-to-bracket"></i>Ingresar</button></ul>
</form>
    <table border = 1>
    <tr><td>Nombre</td><td>Codigo</td><td>ID</td><td>Categoria</td><td>Marca</td><td>Cant. disp.</td><td>Estado</td><td>Valor</td><td>Fecha del valor</td><td>Moneda</td><td>IVA</td><td>Caracteristica 1</td><td>Carac. 2</td><td>Carac. 3</td><td>Carac. 4</td><td>Carac. 5</td><td>Carac. 6</td><td>Imagen</td>
    <?php
    $ID = 0;
    if(empty($visado[0]) === false)
    {
       
        for($i = 0; $i < $visado[0]; $i ++)
        {
            $sel = "SELECT * from  productos p inner join carac_prod c
            WHERE p.ID = c.ID_Prod and (p.Estado like '%$busqueda%' or p.Cantidad like '%$busqueda%' or p.ID like '%$busqueda%' or p.Codigo like '%$busqueda%' or p.Categoria like '%$busqueda%' or p.Nombre like '%$busqueda%' or p.Marca like '%$busqueda%' or p.Moneda like '%$busqueda%' or c.Caracteristica like '%$busqueda%' or c.Caracteristica2 like '%$busqueda%' or c.Caracteristica3 like '%$busqueda%' or c.Caracteristica4 like '%$busqueda%' or c.Caracteristica5 like '%$busqueda%' or c.Caracteristica6 like '%$busqueda%')
            and ID > $ID order by ID asc";
            $ecc =  $conexion -> query($sel);
            $ionar = $ecc -> fetch_array();
            if(empty($ionar[0]) === false)
            {
                $ID = $ionar[0];
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
                <form action="mostrar_productos.php" method="post"> 
                <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[4]?></td><td><?php echo $ionar[0]?></td><td><?php echo $ionar[1]?></td><td><?php echo $ionar[3]?></td><td><?php echo $ionar[5]?></td><td><?php echo $ionar[6]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td><td><?php echo $carac[6]?></td><td><?php echo '<img src= "'.$img.'">'?></td></tr>
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
        where p.ID = c.ID_Prod";
        $hola2 = "";
        for($x = 0; $x < $cant; $x ++)
            {
                $hola2 .= " and (p.Estado like '%$palabras[$x]%' 
                or p.Cantidad like '%$palabras[$x]%' 
                or p.ID like '%$palabras[$x]%' 
                or p.Codigo like '%$palabras[$x]%' 
                or p.Categoria like '%$palabras[$x]%' 
                or p.Nombre like '%$palabras[$x]%' 
                or p.Marca like '%$palabras[$x]%' 
                or p.Moneda like '%$palabras[$x]%' 
                or c.Caracteristica like '%$palabras[$x]%' or c.Caracteristica2 like '%$palabras[$x]%' or c.Caracteristica3 like '%$palabras[$x]%' or c.Caracteristica4 like '%$palabras[$x]%' or c.Caracteristica5 like '%$palabras[$x]%' or c.Caracteristica6 like '%$palabras[$x]%') ";
            }
        $sel .= $hola2;
        $sel .=  " and p.ID > $ID order by p.ID asc";
        $ecc =  $conexion -> query($sel);
        $ionar = $ecc -> fetch_array();
        if(empty($ionar[0]) === false)
            {
        $ID = $ionar[0];
        $contar2 = "SELECT * from carac_prod where ID_prod = $ionar[0]";
        $con2 =  $conexion -> query($contar2);
        $carac = $con2 -> fetch_array();
        $ID_carac = 0;
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
        <form action="mostrar_productos.php" method="post"> 
        <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[4]?></td><td><?php echo $ionar[0]?></td><td><?php echo $ionar[1]?></td><td><?php echo $ionar[3]?></td><td><?php echo $ionar[5]?></td><td><?php echo $ionar[6]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td><td><?php echo $carac[6]?></td><td><?php echo '<img src= "'.$img.'">'?></td></tr>
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
    <?php
}