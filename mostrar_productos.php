<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
//$categoria = $_POST['categoria'];
$categoria = 'Iluminacion';
$contar = "SELECT count(*) from productos where Categoria = '$categoria'";
$con =  $conexion -> query($contar);
$visado = $con -> fetch_array();
?>
<table border = 1>
<tr><td>Nombre</td><td>Marca</td><td>Precio</td><td>Fecha del precio</td><td>Moneda</td><td>IVA</td><td>Imagen</td><td>Caracteristica 1</td><td>Caracteristica 2</td><td>Caracteristica 3</td><td>Caracteristica 4</td><td>Caracteristica 5</td><td>Caracteristica 6</td>
<?php
$ID = 0;
for($i = 0; $i < $visado[0]; $i ++)
{
    $sel = "SELECT * from productos where Categoria = '$categoria' and ID > $ID order by ID asc";
    $ecc =  $conexion -> query($sel);
    $ionar = $ecc -> fetch_array();
    $ID = $ionar[0];
    $contar2 = "SELECT count(*) from carac_prod where ID_prod = $ionar[0]";
    $con2 =  $conexion -> query($contar2);
    $visado2 = $con2 -> fetch_array();
    $ID_carac = 0;
    $visado2[0] = $visado2[0]/2;
    for($x = 0; $x < $visado2[0]; $x ++)
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
    ?>
    <tr><td><?php echo $ionar[2]?></td><td><?php echo $ionar[3]?></td><td><?php echo $ionar[8]?></td><td><?php echo $ionar[10]?></td><td><?php echo $ionar[11]?></td><td><?php echo $ionar[12]?></td><td><?php echo "hoola"?></td><td><?php echo $carac[0]?></td><td><?php echo $carac[1]?></td><td><?php echo $carac[2]?></td><td><?php echo $carac[3]?></td><td><?php echo $carac[4]?></td><td><?php echo $carac[5]?></td></tr>


    <?php
}
$carac[0] = null;
$carac[1] = null;
$carac[2] = null;
$carac[3] = null;
$carac[4] = null;
$carac[5] = null;

?>
</table>

<?php
?>