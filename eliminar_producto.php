<?php
session_start();
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo;
?> 
<p>¿Desea eliminar el producto de codigo <?php echo $codigo ?>?</p>
<a href = "eliminacion.php">Confirmar</a>
<a href = "eliminar-producto.php">Cancelar</a>
<?php