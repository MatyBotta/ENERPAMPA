<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$categoria = $_POST['categoria'];
$contar = "SELECT count(*) from productos where Categoria = '$categoria'";
$con =  $conexion -> query($contar);
$visado = $con -> fetch_array();
?>
<table>
<tr><td>Nombre</td><td>Marca</td><td>Precio</td><td>Fecha del precio</td><td>Moneda</td><td>IVA</td><td>Imagen</td>
<?php
$ID = 0;
for($i = 0; $i < $visado[0]; $i ++)
{
    $sel = "SELECT * from productos where Categoria = '$categoria' and ID > $ID order by ID asc";
    $ecc =  $conexion -> query($sel);
    $ionar = $ecc -> fetch_array();
    $ID = $ionar[0];
    ?>
    <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo imagennn?></td></tr>


    <?php
}
?>
</table>

<?php
?>