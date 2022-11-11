<?php
if(!isset($_SESSION))
{
    session_start();
}
$codigo = $_SESSION['prod'];
?>
<!DOCTYPE html>
<html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>SECCION PRODUCTO</title>
            <link rel="stylesheet" href="productos_empleados.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          </head>
<h2 id="h2">Ingresar datos del producto con codigo: <?php echo $codigo ?></h2>
                  <br>
            <form action="ingreso_producto.php" method="post" enctype = "multipart/form-data">
            <h3>Nombre (obligatorio)</h3>
            <input class="nombre" step="any" type="text"  name="nombre" value="">           
        <br>
            <h3>Marca (obligatorio)</h3>
            <input class="marca" step="any" type="text" name="marca" value="" >
            <br>
            <h3>Cantidad (obligatorio)</h3>
            <input class="cantidad" step="any" type="text" name="cantidad" value="" >
        <fieldset id="cat">
		<div class="radio">
        <h2>Categoria (obligatorio)</h2>
        <input type="radio" id= 1 value= 1 name="cat"><label for="A">Control de Potencia</label>
        <input type="radio" id= 2 value= 2 name="cat"><label for="B">Automatización</label>
        <input type="radio" id= 3 value= 3 name="cat"><label for="C">Distribución eléctrica domiciliaria y comercial</label>
        <input type="radio" id= 4 value= 4 name="cat"><label for="D">Accesorios</label>
        <input type="radio" id= 5 value= 5 name="cat"><label for="E">Distribución eléctrica industrial y monitoreo de redes e instrumentos</label>
        <input type="radio" id= 6 value= 6 name="cat"><label for="F">Iluminacion</label>
        </div>
</fieldset>
        <br>
            <h3>Caracteristicas</h3>
            <input class="c1" type="text" name="carac1" value="" placeholder = "Caracteristica 1 (obligatorio)">
            <input class="c2" type="text" name="carac2" value="" placeholder = "Caracteristica 2">
            <input class="c3" type="text" name="carac3" value="" placeholder = "Caracteristica 3">
            <input class="c4" type="text" name="carac4" value="" placeholder = "Caracteristica 4">
            <input class="c5" type="text" name="carac5" value="" placeholder = "Caracteristica 5">
            <input class="c6" type="text" name="carac6" value="" placeholder = "Caracteristica 6">
        <br>
        <h3>Imagen (obligatorio)</h3> 
            <input step="any" type="file" name="imagen" accept = "image/*" value="">
        <h3>Precio</h3>
            <input step="any" type="number" name="precio" value="">
        <br>
        <h3> Fecha Precio</h3>
            <input step="any" type="date" name="fecha" value="">
        <br>
        <fieldset id="moneda">
        <legend>Moneda (obligatorio)</legend>
        <input type="radio" id= 1 value= 1 name="moneda"><label for="A">Peso argentino</label>
        <input type="radio" id= 2 value= 2 name="moneda"><label for="B">Dolar estadounidense</label>
        </fieldset>
        <br>
        <fieldset id="IVA">
        <legend>Tipo de IVA (obligatorio)</legend>
        <input type="radio" id= 1 value= 1 name="IVA"><label for="A">10.5%</label>
        <input type="radio" id= 2 value= 2 name="IVA"><label for="B">21%</label>
        </fieldset>
        <button type="submit">Enviar</button>
        <a href = "agregar-producto.php">Cancelar</a>
        <?php