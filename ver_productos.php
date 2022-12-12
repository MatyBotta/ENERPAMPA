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
            <link rel="stylesheet" href="panel_control.css" />
            <link rel="stylesheet" href="tablaempleado.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          </head>
          <body>
            <h2 class="title" id="productos">Seleccionar alguna opcion</h2>
            <hr>
            <div class="sidebar">
              <img src="imagenes/LOGO.ico"width="80" alt="">
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
                      <i class="fa-solid fa-list-ul"></i>
                      <span>Ver usuarios que ingresaron</span>
                    </a>
                  </li>
                  <li>
                    <a href="ver_productos.php">
                    <i class="fa-solid fa-list-ul"></i>
                      <span>Ver todos los productos</span>
                    </a>
                  </li>
                  <li>
                    <a href="eliminar_cliente.html">
                      <i class="fa-solid fa-list-ul"></i>
                      <span>Eliminar clientes</span>
                    </a>
                  </li>
                  <li>
                    <a href="crear_trabajador.html">
                      <i class="fa-solid fa-list-ul"></i>
                      <span>Crear usuario trabajador</span>
                    </a>
                  </li>
                <li>
                    <a href="index_trabajador.html">
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
if(empty($visado[0]) === false)
{
    ?>
    <form action="ver_productos_buscados.php" method="post"  > 
    <section class="titulo">
    <br>
        <h3>Buscar productos:</h3>
        <p><input class="controls2" type="text" name="prod" id="prod"></p>
        <ul><button type="submit"><i class="fa-solid fa-right-to-bracket"></i>Ingresar</button></ul>
</section>
</form>
    <table border = 1>
    <tr><th>Nombre</th><th>Codigo</th><th>ID</th><th>Categoria</th><th>Marca</th><th>Cant. disp.</th><th>Estado</th><th>Valor</th><th>Fecha del valor</th><th>Moneda</th><th>IVA</th><th>Caracteristica 1</th><th>Carac. 2</th><th>Carac. 3</th><th>Carac. 4</th><th>Carac. 5</th><th>Carac. 6</th><th>Imagen</th>
    <?php
    $ID = 0;
    for($i = 0; $i < $visado[0]; $i ++)
    {
        $sel = "SELECT * from productos where ID > $ID order by ID asc";
        $ecc =  $conexion -> query($sel);
        $ionar = $ecc -> fetch_array();
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
        <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[4]?></td><td><?php echo $ionar[0]?></td><td><?php echo $ionar[1]?></td><td><?php echo $ionar[3]?></td><td><?php echo $ionar[5]?></td><td><?php echo $ionar[6]?></td><td><?php echo $valor.$ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td><td><?php echo $carac[6]?></td><td><?php echo '<img src= "'.$img.'">'?></td></tr>
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
}
else
{
  echo "No hay productos ingresados";
}