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
    margin: 18px 0;
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
                    <a href="ver_pedidos_archivados.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                      <span>Ver definicion pedidos</span>
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
                    <i class="fa-solid fa-box-open"></i>
                      <span>Ver todos los productos</span>
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
$contar = "SELECT count(*) from ingresos";
$con =  $conexion -> query($contar);
$visado = $con -> fetch_array();
if(empty($visado[0]) === false)
{
    ?>
    <table border = 1>
    <tr><th>Fecha ingreso</th><th>Nombre y Apellido</th><th>Rubro</th><th>Mail</th><th>Telefono</th><th>Celular</th></tr>
    <?php
    $fecha = 10000000000000000000000000000000;
    for($i = 0; $i < $visado[0]; $i ++)
    {
        $sel = "SELECT * from ingresos where Fecha > '$fecha' order by Fecha asc";
        $ecc =  $conexion -> query($sel);
        $ionar = $ecc -> fetch_array();
        $fecha = $ionar[1];
        $contar2 = "SELECT * from usuario where Mail = '$ionar[0]'";
        $con2 =  $conexion -> query($contar2);
        $carac = $con2 -> fetch_array();
        if(empty($carac[4]) === true)
        {
            $carac[4] = "-";
        }   
        if(empty($carac[5]) === true)
        {
            $carac[5] = "-";
        }
        ?>
        <tr><td><?php echo $ionar[1]?></td><td><?php echo $carac[2] . " " . $carac[3]?></td><td><?php echo $carac[7]?></td><td><?php echo $ionar[0]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td></tr>
        <?php
    }
    
    ?>
    </table>
</body>
</html>
    <?php
}
else
{
    echo "No hay ingresos";
}