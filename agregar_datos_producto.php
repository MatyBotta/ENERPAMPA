<?php
include("db.php");
session_start();
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo;
$comprobacion = "SELECT Codigo from productos where Codigo = '$codigo'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    include("agregar-producto.html");
    echo '<script>alert("Este producto ya se encuentra en la base de datos")</script>';
}
else
{
?>
<h2 id="h2">Ingresar datos del producto</h2>
                  <br>
            <form action="ingreso_producto.php" method="post">
            <h3>Nombre (obligatorio)</h3>
            <input step="any" type="text"  name="nombre" value="">           
        <br>
            <h3>Marca (obligatorio)</h3>
            <input step="any" type="text" name="marca" value="" >
        <fieldset id="cat">
        <legend>Categoria (obligatorio)</legend>
        <input type="radio" id= 1 value= 1 name="cat"><label for="A">Control de Potencia</label>
        <input type="radio" id= 2 value= 2 name="cat"><label for="B">Automatización</label>
        <input type="radio" id= 3 value= 3 name="cat"><label for="C">Distribución eléctrica domestica</label>
        <input type="radio" id= 4 value= 4 name="cat"><label for="D">Accesorios</label>
        <input type="radio" id= 5 value= 5 name="cat"><label for="E">Distribución eléctrica industrial</label>
        <input type="radio" id= 6 value= 6 name="cat"><label for="E">Monitoreo de redes e instrumentos</label>
</fieldset>
        <br>
            <h3>Caracteristicas</h3>
            <input type="text" name="carac1" value="" placeholder = "Caracteristica 1 (obligatorio)">
            <input type="text" name="carac2" value="" placeholder = "Caracteristica 2">
            <input type="text" name="carac3" value="" placeholder = "Caracteristica 3">
            <input type="text" name="carac4" value="" placeholder = "Caracteristica 4">
            <input type="text" name="carac5" value="" placeholder = "Caracteristica 5">
            <input type="text" name="carac6" value="" placeholder = "Caracteristica 6">
        <br>
        <button type="submit">Enviar</button>
        <?php
}