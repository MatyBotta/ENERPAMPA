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
                      <span>Ver todos los productos </span>
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
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$seleccionar = "SELECT count(*) FROM pedido";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
$ID = 0;
?>
<table border = "1">
<tr font = "bold"><th>ID Pedido</th><th>Fecha</th><th>Contacto</th><th>Mail</th><th>Telefono</th><th>Celular</th></tr>
<?php
for($i = 0; $i < $info[0]; $i ++)
{
  $carrito = "SELECT * from pedido where ID > $ID order by ID asc";
  $shop =  $conexion -> query($carrito);
  $ionar = $shop -> fetch_array();
  $ID = $ionar[0];
  $carrito2 = "SELECT * from usuario where Mail = '$ionar[1]'";
  $shop2 =  $conexion -> query($carrito2);
  $ionar2 = $shop2 -> fetch_array();
  if($ionar2[4] == 0)
  {
    $ionar2[4] = '-';
  }
  if($ionar2[5] == 0)
  {
    $ionar2[5] = '-';
  }
  if($ionar2[2] == null)
  {
    $ionar2[2] = '';
  }
  if($ionar2[3] == null)
  {
    $ionar2[3] = '';
  }
  ?>
  <tr><td><?php echo $ID?></td><td><?php echo $ionar[1]?></td><td><?php echo $ionar2[2] . " " .  $ionar2[3]?></td><td><?php echo $ionar[2]?></td><td><?php echo $ionar2[4]?></td><td><?php echo $ionar2[5]?></td><td><button onclick = "window.location.href='Excelpedido.php?id_pedido=<?php echo $ID;?>'">Exportar a Excel</button></td><td><button onclick = "window.location.href='concretado.php?id_pedido=<?php echo $ID;?>'">Pedido concretado</button><td><button onclick = "window.location.href='eliminar_pedido.php?id_pedido=<?php echo $ID;?>'">Eliminar</button></td></tr>
<?php
  if(isset($_POST['insert']))
  {
    function eliminar()
    {
      $ID = $_SESSION["ID"];
      $var = "DELETE FROM carrito where Pedido = $ID";
      $a = $conexion -> query($carrito);
      $var2 = "DELETE FROM pedido where ID = $ID";
      $a2 = $conexion -> query($carrito2);
    }
  }
}