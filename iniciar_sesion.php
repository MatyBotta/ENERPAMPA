<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloiniciosesion.css">
    <title>INICIO DE SESION</title>
</head>

<body>
  <section class="form-register">
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include("db.php");
    if(isset($_GET['x']) && empty($_GET['x']) == false)
    {
      $_SESSION['x'] = $_GET['x'];
    }
    ?>
    <form action="inicio_sesion_usuario.php" method="post"  > 
    <h4>Inicio de sesion</h4>
    <input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
    <input class="controls" type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Ingresar">
    <p><a href="registrarse.php">No tengo cuenta</a></p>
  </section>

</body>
</html>