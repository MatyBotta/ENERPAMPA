<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$x = 0;
$codigo = $_SESSION['prod'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$cant = $_POST['cantidad'];
$carac[0] = $_POST['carac1'];
$carac[1] = $_POST['carac2'];
$carac[2] = $_POST['carac3'];
$carac[3] = $_POST['carac4'];
$carac[4] = $_POST['carac5'];
$carac[5] = $_POST['carac6'];
$file = $_FILES["imagen"]["name"];
if($nombre == null || $marca == null || empty($_POST['cat']) == true || $carac[0] == null || $cant == null || $file == null || empty($_POST['precio']) == true || empty($_POST['fecha']) == true || empty($_POST['IVA']) == true || empty($_POST['moneda']) == true)
{
    $_SESSION['p'] = 10;
    include("agregar_datos_producto.php");
    echo '<script>alert("Por favor ingrese todos los campos obligatorios")</script>';
}
else
{
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $cat = $_POST['cat'];
    $moneda = $_POST['cat'];
    $IVA = $_POST['IVA'];
    switch($moneda)
    {
        case 1:
                $moneda = 'Pesos';
                break;
        case 2:
                $moneda = 'Dolares';
                break;
    }
    switch($IVA)
    {
        case 1:
                $IVA = 10.5;
                break;
        case 2:
                $IVA = 21;
                break;
    }
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
    $ruta = 'imagenes_subidas/'.$file;
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
    $comprobacion = "SELECT ID from productos order by ID desc";
    $revisar =  $conexion -> query($comprobacion);
    $info = $revisar -> fetch_array();
    $ID = $info[0] + 1;
    $in  = "INSERT INTO productos (ID, Nombre, Categoria, Codigo, Marca, Cantidad, Estado, Imagen, Precio, Fecha_Prec, Moneda, IVA) values 
    ($ID,'$nombre','$cat','$codigo','$marca', '$cant', 'Vigente','$file', $precio, '$fecha', '$moneda', $IVA)";
    $con =  $conexion -> query($in);
    for($i = 0; $i < 6; $i++)
    {
        if($carac[$i] != null)
        {
            $in2 = "INSERT INTO carac_prod (ID_prod, Caracteristica, ID_carac_prod) values 
            ($ID,'$carac[$i]', $i+1)";
            $con2 =  $conexion -> query($in2);
        }
    }
    if(empty($con) === false && empty($con2) === false)
    {
        ?>
        <a href = "agregar-producto.html">Agregar otro producto</a>
            <?php
    }
}
?> 