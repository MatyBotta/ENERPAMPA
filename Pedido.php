<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$mail = $_SESSION['mail'];
$seleccionar = "SELECT * FROM usuario where Mail = '$mail'";
$elegir =  $conexion -> query($seleccionar);
$info = $elegir -> fetch_array();
$destino = 'ventas@enerpampa.com';
$titulo = 'Pedido por pagina web';
?>
<table>
<?php
$mensaje = 'Mail: ' . $info[0] . ', Nombre y Apellido: ' . $info[2] . " " . $info[3] . ", Telefono: " . "\n";
$contar = "SELECT count(*) from carrito where Mail = '$mail'";
$contado =  $conexion -> query($contar);
$var = $contado -> fetch_array();
    ?>
    <td>Nombre</td><td>Marca</td><td>Valor</td><td>Fecha del valor</td><td>Moneda</td><td>IVA</td><td>Codigo</td><td>Cantidad</td><td>Imagen</td></tr>
    <?php
    $ID = 0;
    for($i = 0; $i < $var[0]; $i ++)
    {
        $carrito = "SELECT ID_Prod, Cantidad from carrito where Mail = '$mail' and ID_Prod > $ID order by ID_Prod asc";
        $shop =  $conexion -> query($carrito);
        $ionar = $shop -> fetch_array();
        $ID = $ionar[0];
        $prod = "SELECT * from productos where ID = $ID and Estado != 'Eliminado'";
        $stock =  $conexion -> query($prod);
        $ionar2 = $stock -> fetch_array();
        if(empty($ionar2[0]) === false)
        {
            if($ionar2[11] == "Pesos")
            {
                $valor = "$";
            }
            else
            {
                $valor = "U$"."S";
            }
            $mensaje .= $ionar2[2] . " " . $ionar2[3] . " " . $valor.$ionar2[8] . " " . $ionar2[10]. " " . $ionar2[11]. " " . $ionar2[12]. " " . $ionar2[4]. " " . $ionar[1] . "\n";
        }
    }
    echo $mensaje;
    ?>
    </table>
    <?php