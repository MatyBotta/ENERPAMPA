<?php
if(!isset($_SESSION))
{
    session_start();
}
$codigo = $_SESSION['prod'];
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Agregar producto</title>
	<link rel="stylesheet" href="diseñoagregarprod.css">

</head>

<body>
<div class="head">

        <div class="logo">
            <img src="Imagenes/LOGO.ico" width="115" alt="">
        </div>
        <nav class="navbar">
        </nav>
        <a href="panel_control.html">Inicio</a>
    </div>
	<br>
	<br>
	<header>
		<h1 id="title">Ingresar datos del producto: <?php echo $codigo ?></h1>
	</header>
	<div id="main-container">
                  <br>
            <form action="ingreso_producto.php" method="post" enctype = "multipart/form-data">
            <h3>Nombre (obligatorio)</h3>
            <input step="any" type="text"  name="nombre" value="">           
        <br>
            <h3>Marca (obligatorio)</h3>
            <input step="any" type="text" name="marca" value="" >
            <br>
            <h3>Cantidad (obligatorio)</h3>
            <input step="any" type="text" name="cantidad" value="" >
        <fieldset id="cat">
        <legend>Categoria (obligatorio)</legend>
        <br>
        <label for="A">Control de Potencia</label>
        <input type="radio" id= 1 value= 1 name="cat">
        <label for="B">Automatización</label>
        <input type="radio" id= 2 value= 2 name="cat">
        <label for="C">Distribución eléctrica domiciliaria y comercial</label>
        <input type="radio" id= 3 value= 3 name="cat">
        <label for="D">Accesorios</label>
        <input type="radio" id= 4 value= 4 name="cat">
        <label for="E">Distribución eléctrica industrial y monitoreo de redes e instrumentos</label>
        <input type="radio" id= 5 value= 5 name="cat">
        <label for="F">Iluminacion</label>
        <input type="radio" id= 6 value= 6 name="cat">
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
        <br>
        <label for="A">Peso argentino</label>
        <input type="radio" id= 1 value= 1 name="moneda">
        <label for="B">Dolar estadounidense</label>
        <input type="radio" id= 2 value= 2 name="moneda">
        </fieldset>
        <br>
        <fieldset id="IVA">
        <legend>Tipo de IVA (obligatorio)</legend>
        <br>
        <label for="A">10.5%</label>
        <input type="radio" id= 1 value= 1 name="IVA">
        <label for="B">21%</label>
        <input type="radio" id= 2 value= 2 name="IVA">
        </fieldset>
        <button type="submit">Enviar</button>

        <?php