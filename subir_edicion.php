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
        $codigo = $info1[4]; 
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
                $cat = 'Distribución eléctrica industrial';
                break;
            case 6:
                $cat = 'Monitoreo de redes e instrumentos';
                break;
        }
    }
    $actua = "UPDATE productos set Categoria = '$cat', Nombre = '$nombre', Marca = '$marca', Codigo = '$codigo', Cantidad = $cant where ID = $ID";
    $lizacion =  $conexion -> query($actua);
    for($i = 1; $i <= 6; $i++)
    {
        if(empty($info3[$i][0]) == false || empty($carac[$i]) == false)
        {
            if(empty($info3[$i][0]) == true && empty($carac[$i]) == false)
            {
                $in2 = "INSERT INTO carac_prod (ID_prod, Caracteristica, ID_carac_prod) values 
                ($ID,'$carac[$i]', $i)";
                $con2 =  $conexion -> query($in2);
            }
            elseif(empty($info3[$i][0]) == false && empty($carac[$i]) == false)
            {
                $actua = "UPDATE carac_prod set Caracterisitca = '$carac[$i]' where ID_prod = $ID and ID_carac_prod = $i";
                $lizacion =  $conexion -> query($actua);   
            }
        }
    }
    echo ":)";