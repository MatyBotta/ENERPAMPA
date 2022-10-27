<?php
include("db.php");
if(!isset($_SESSION))
{
    session_start();
}
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo;
$comprobacion = "SELECT Nombre, Marca, ID from productos where (Codigo like '%R_=$codigo' or Codigo = '$codigo') and Estado = 'Eliminado'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    $comprobacion = "SELECT Count(*) from productos where Codigo like '%R_=$codigo' and Estado = 'Eliminado'";
    $revisar =  $conexion -> query($comprobacion);
    $visado = $revisar -> fetch_array();
    if($visado[0] > 1)
    {
        ?>
        <p>Seleccione el producto que desea reactivar</p>
        <form action="eliminacion.php" method="post"> 
        <input type="radio" id="A" value= <?php echo $info[2] ?> name="eleccion" ><label for="A"><?php echo $info[0] ?>, <?php echo $info[1] ?>, ID: <?php echo $info[2] ?></label>
        <?php
        $info2[2] = $info[2];
        for($i = 1; $i < $visado[0]; $i++)
        {
            $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo like '%R_=$codigo' and Estado = 'Eliminado' and ID > $info2[2] order by ID asc";
            $revisar2 =  $conexion -> query($comprobacion2);
            $info2 = $revisar2 -> fetch_array();
            ?>
            <input type="radio" id="A" value= <?php echo $info2[2] ?> name="eleccion" ><label for="A"><?php echo $info2[0] ?>, <?php echo $info2[1] ?>, ID: <?php echo $info2[2] ?></label>
            <?php
        }
        ?>
        <button type="submit">Enviar</button>
        </form>
        <?php
    }
    else
    {
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <p> Nombre: <?php echo $info[0] ?></p>
        <p> Marca: <?php echo $info[1] ?></p>
        <p> ID: <?php echo $info[2] ?></p>
        <html>
        <body>
        <p>Si este es el producto que desea reactivar presione "Continuar", si fue un error seleccione "Cancelar".</p>
        <a href = "activacion.php">Continuar</a>
        <a href = "volver-activar-producto.html">Cancelar</a>
        </body>
        </html>
        <?php
    }
}
else
{
    $comprobacion3 = "SELECT * from productos where Codigo = '$codigo'";
    $revisar3 =  $conexion -> query($comprobacion3);
    $info3 = $revisar3 -> fetch_array();
    if(empty($info3[0]) == true)
    {
        echo "No existe un producto con tal codigo en el sistema.";
        ?>
        <br>
        <a href = "volver-activar-producto.html">Ingresar otro codigo</a>
        <?php
    }
    else
    {
        echo "No hay ningun producto dado de baja con el codigo ingresado.";
        ?>
        <br>
        <a href = "volver-activar-producto.html">Ingresar otro codigo</a>
        <?php
    }
}