<!DOCTYPE html>
         <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="diseñodesafprod.css"/>
            <link rel="stylesheet" href="diseñoagregarprod.css"/>
          </head>
         <body>  
<?php
if(!isset($_SESSION))
{
    session_start();
}
    include("db.php");
    $ID = $_SESSION['ID'];
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $cant = $_POST['cantidad'];
    $carac[1] = $_POST['carac1'];
    $carac[2] = $_POST['carac2'];
    $carac[3] = $_POST['carac3'];
    $carac[4] = $_POST['carac4'];
    $carac[5] = $_POST['carac5'];
    $carac[6] = $_POST['carac6'];
    $comprobacion1 = "SELECT * from productos where ID = $ID";
    $revisar1 =  $conexion -> query($comprobacion1);
    $info1 = $revisar1 -> fetch_array();
    $comprobacion3 = "SELECT * from carac_prod where ID_prod = $ID";
    $revisar3 =  $conexion -> query($comprobacion3);
    $info3 = $revisar3 -> fetch_array();
    if ($nombre == NULL)
    {
        $nombre = $info1[2]; 
    }
    if ($marca == NULL)
    {
        $marca = $info1[3]; 
    }
    if ($cant == NULL)
    {
        $cant = $info1[5]; 
    }
    if ($codigo == NULL)
    {
        $codigo = $info1[4]; 
    }
    if (empty($_FILES['imagen']['name']) == true)
    {
        $file = $info1[7]; 
    }
    else
    {
        $file = $_FILES['imagen']['name'];
        $ruta = 'imagenes_subidas/'.$file;
        $archivo = $_FILES["imagen"]["tmp_name"];
        $imagen = getimagesize($archivo);
        $ancho = $imagen[0];
        $alto = $imagen[1];
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
        if($ancho != 100 && $alto != 100)
        {
            include("edicion.php");
            echo '<script>alert("Por favor, la imagen debe tener algun lado la medida de 100")</script>';
        }
    }
    if(empty($_POST['precio']) == true)
    {
        $precio = $info1[8]; 
    }
    else
    {
        $precio = $_POST['precio']; 
    }
    if(empty($_POST['fecha']) == true)
    {
        $fecha = $info1[10]; 
    }
    else
    {
        $fecha = $_POST['fecha']; 
    }
    if(empty($_POST['moneda']) == true)
    {
        $moneda = $info1[11]; 
    }
    else
    {
        $moneda = $_POST['moneda']; 
        switch($moneda)
        {
            case 1:
                {
                    $moneda = 'Pesos';
                    break;
                }
            case 2:
                {
                    $moneda = 'Dolares';
                    break;
                }
        }
    }
    if(empty($_POST['IVA']) == true)
    {
        $IVA = $info1[12]; 
    }
    else
    {
        $IVA = $_POST['IVA']; 
        switch($IVA)
        {
            case 1:
                {
                    $IVA = 10.5;
                    break;
                }
            case 2:
                {
                    $IVA = 21;
                    break;
                }
        }
    }
    if (empty($_POST['cat']) == true)
    {
        $cat = $info1[1]; 
    }
    else
    {
        $cat = $_POST['cat'];
        switch($cat)
        {
            case 1:
                $cat = 'Control de Potencia';
                break;
            case 2:
                $cat = 'Automatización';
                break;
            case 3:
                $cat = 'Distribución eléctrica terciaria';
                break;
            case 4:
                $cat = 'Accesorios';
                break;
            case 5:
                $cat = 'Distribución eléctrica industrial y monitoreo de redes e instrumentos';
                break;
            case 6:
                $cat = 'Iluminacion';
                break;
        }
    }
    $actua = "UPDATE productos set Categoria = '$cat', Nombre = '$nombre', Marca = '$marca', Codigo = '$codigo', Cantidad = $cant, Imagen = '$file', Precio = $precio, Fecha_Prec = '$fecha', Moneda = '$moneda', IVA = $IVA where ID = $ID";
    $lizacion =  $conexion -> query($actua);
    for($i = 1; $i <= 6; $i++)
    {
        if(empty($info3[$i]) == false && empty($carac[$i]) == true)
        {
            $carac[$i] = $info3[$i];
        }
    }
    $actua2 = "UPDATE carac_prod set Caracteristica = '$carac[1]', Caracteristica2 = '$carac[2]', Caracteristica3 = '$carac[3]', Caracteristica4 = '$carac[4]', Caracteristica5 = '$carac[5]', Caracteristica6 = '$carac[6]' where ID_Prod = $ID";
    $lizacion2 =  $conexion -> query($actua2);
    if($lizacion == true && $lizacion2 == true)
    { ?>
        <section class="msg">
        <h2>Producto editado correctamente.</h2>
        <br>
        <button><a href = "panel_control.html">Volver</a></button>
        </section>
        </body>
        </html>
        <?php
    }

    