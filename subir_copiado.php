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
    $comprobacion2 = "SELECT count(Caracteristica) from carac_prod where ID_prod = $ID";
    $revisar2 =  $conexion -> query($comprobacion2);
    $info2 = $revisar2 -> fetch_array();
    for($i = 1; $i <= $info2[0]; $i++)
    {
        $comprobacion3 = "SELECT Caracteristica from carac_prod where ID_prod = $ID and ID_carac_prod = $i";
        $revisar3 =  $conexion -> query($comprobacion3);
        $info3[$i] = $revisar3 -> fetch_array();
    }
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
    if (empty($_FILES['imagen']) == true)
    {
        $file = $info1[7]; 
    }
    else
    {
        $file = $_FILES['imagen']['name'];
        $ruta = 'imagenes_subidas/'.$file;
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
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
                $cat = 'Distribución eléctrica domiciliaria y comercial';
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
    echo $ID;
    $in  = "INSERT INTO productos (ID, Nombre, Categoria, Codigo, Marca, Cantidad, Estado, Imagen, Precio, Fecha_Prec) values 
    ($ID,'$nombre','$cat','$codigo','$marca', '$cant', 'Vigente', '$file', $precio, '$fecha')";
    $con =  $conexion -> query($in);
    for($i = 1; $i <= 6; $i++)
    {
        if(empty($carac[$i]) == false || empty($info3[$i][0]) == false)
        {
            if(empty($carac[$i]) == false)
            {
                $in2 = "INSERT INTO carac_prod (ID_prod, Caracteristica, ID_carac_prod) values 
                ($ID,'$carac[$i]', $i)";
                $con2 =  $conexion -> query($in2);
            }
            else
            {
                $a = $info3[$i][0];
                $in2 = "INSERT INTO carac_prod (ID_prod, Caracteristica, ID_carac_prod) values 
                ($ID,'$a', $i)";
                $con2 =  $conexion -> query($in2); 
            }
        }
    }
    if(empty($con) === false && empty($con2) === false)
    {
        echo 'hola';
    }