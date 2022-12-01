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
$destino = 'equipo.mkjuan@gamil.com';
$titulo = 'Pedido por pagina web';
if(empty($info[4]) === true)
{
    $info[4] = "-";
}
if(empty($info[5]) === true)
{
    $info[5] = "-";
}
$mensaje = ' <html><body>Mail: ' . $info[0] . ', Nombre y Apellido: ' . $info[2] . " " . $info[3] . ", Telefono: " . $info[4] . ", Celular: " . $info[5] ."\n";
$contar = "SELECT count(*) from carrito where Mail = '$mail'";
$contado =  $conexion -> query($contar);
$var = $contado -> fetch_array();
date_default_timezone_set('America/Argentina/Buenos_Aires');
    $hoy = date("Y-m-d, g:i a");
    $date = new DateTime($hoy );
    $mensaje .= ' ' . $date->format(' jS \of F Y h:i:s A');
    $mensaje .= '<table><td>ID</td><td>Cantidad</td><td>Nombre</td><td>Marca</td><td>Codigo</td><td>Valor</td><td>IVA</td></tr>';
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
            $mensaje .= '<tr><td>'. $ID . '</td><td>' . $ionar[1] . '</td><td>' . $ionar2[2] . '</td><td>' . $ionar2[3] . '</td><td>' .$ionar2[4]. '</td><td>' . $valor.$ionar2[8] . '</td><td>' . $ionar2[12] . '</td></tr>';
        }
    }
    $mensaje .= '</table></body></html>';
    echo $mensaje;
    $hola = mail($destino, $titulo, $mensaje);
    if($hola === true)
    {
        echo ":)";
    }
    else
    {
        echo ":(";
    }
    ?>
    </table>
    <?php