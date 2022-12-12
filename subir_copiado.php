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
    $comprobacion2 = "SELECT * from carac_prod where ID_prod = $ID";
    $revisar2 =  $conexion -> query($comprobacion2);
    $info2 = $revisar2 -> fetch_array();
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
        echo "Codigo no modificado";
        include("nuevo_producto_copiado.html"); 
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
            include("copiado.php");
            echo '<script>alert("Por favor, la imagen debe tener algun lado la medida de 100")</script>';
        }
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
    $comprobacion = "SELECT ID from productos order by ID desc";
    $revisar =  $conexion -> query($comprobacion);
    $info = $revisar -> fetch_array();
    $ID = $info[0] + 1;
    $in  = "INSERT INTO productos (ID, Nombre, Categoria, Codigo, Marca, Cantidad, Estado, Imagen, Precio, Fecha_Prec, Moneda, IVA) values 
    ($ID,'$nombre','$cat','$codigo','$marca', '$cant', 'Vigente','$file', $precio, '$fecha', '$moneda', $IVA)";
    $con =  $conexion -> query($in);
    for($i = 1; $i <= 6; $i++)
    {
        if(empty($info2[$i]) == false && empty($carac[$i]) == true)
        {
            $carac[$i] = $info2[$i];
        }
    }
    $actua2 = "INSERT INTO carac_prod (ID_prod, Caracteristica, Caracteristica2, Caracteristica3, Caracteristica4, Caracteristica5, Caracteristica6) 
    values ($ID, '$carac[1]', '$carac[2]', '$carac[3]', '$carac[4]', '$carac[5]', '$carac[6]')";
    $con2 =  $conexion -> query($actua2);
    if(empty($con) === false && empty($con2) === false)
    {
        echo 'hola';
    }