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
	<link rel="stylesheet" href="styles.css">

</head>

<body>
<div class="head">

        <div class="logo">
            <img src="Imagenes/LOGO.ico" width="115" alt="">
        </div>
        <nav class="navbar">
            <a href="editar-producto.html">Inicio</a>
        </nav>
    </div>
	<br>
	<br>
	<header>
		<h1 id="title">Ingresar datos del producto: <?php echo $codigo ?></h1>
	</header>
	<div id="main-container">
		<form id="survey-form" action = "ingreso_producto.php" enctype = "multipart/form-data">
			<div>
				<label id="name-label" for="name">Nombre del producto (obligatorio):</label>
				<input id="nombre" type="text" name="nombre" placeholder="…" required>
			</div>

			<div>
				<label id="marca-label" for="marca">Marca (obligatorio):</label>
				<input id="marca" type="text" name="marca" placeholder="…" required>
			</div>

			<div>
				<label id="number-label" for="number">Cantidad (obligatorio):</label>
				<input id="cantidad" type="number" name="cantidad" placeholder="…" min="0" max="10000" required>
			</div>

			<div>
				<label>Comentario 1 (obligatorio):</label>
				<textarea id="carac1" type="text" name="carac1" placeholder="…" required></textarea>
			</div>

			<div>
				<label>Comentario 2 (opcional):</label>
				<textarea id="carac2" type="text" name="carac2" placeholder="…"></textarea>
			</div>
			<div>
				<label>Comentario 3 (opcional):</label>
				<textarea id="carac3" type="text" name="carac3" placeholder="…"></textarea>
			</div>
			<div>
				<label>Comentario 4 (opcional):</label>
				<textarea id="carac4" type="text" name="carac4" placeholder="…"></textarea>
			</div>
			<div>
				<label>Comentario 5 (opcional):</label>
				<textarea id="carac5" type="text" name="carac5" placeholder="…"></textarea>
			</div>
			<div>
				<label>Comentario 6 (opcional):</label>
				<textarea id="carac6" type="text" name="carac6" placeholder="…"></textarea>
			</div>
			<div>
				<h3>Imagen (obligatorio)</h3> 
				<br>
            	<input step="any" type="file" name="imagen" accept = "image/*" value="">
			</div>

			<div>
				<h3>Precio (obligatorio):</h3>
				<input id="precio" step="any" type="number" name="precio" min="0" max="10000" value="">
			</div>
			<div>
				<h3> Fecha Precio:</h3>
				<br>
            	<input id="fecha" step="any" type="date" name="fecha" value="">
        <br>
			</div>
					<div>
					<h3>Moneda (obligatorio)</h3>
					</div>
					<br>
					<label for="A">Peso argentino</label>
					<input id="moneda" type="radio" id= 1 value= 1 name="moneda">
					<div>
					<label for="B">Dolar estadounidense</label>
					<input  id="moneda" type="radio" id= 2 value= 2 name="moneda">
					</div>
			<div>
				
					<div>
					<h3>Tipo de IVA (obligatorio)</h3>
					</div>
					<br>
					<label for="A">10.5%</label>
					<input id="IVA" type="radio" id= 1 value= 1 name="IVA">
					<div>
					<label for="B">21%</label>
					<input id="IVA" type="radio" id= 2 value= 2 name="IVA">
				</div>
				
			</div>
			<button type="submit" id="submit">Enviar</button>

		</form>
	</div>

</body>

</html>
