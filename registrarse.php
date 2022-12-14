<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloregistro.css">
    <title> REGISTRO ENERPAMPA</title>
</head>
<body>
<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
if(empty($_SESSION['D']) === false)
{
  switch($_SESSION['D'])
  {
    case 1: 
      {
        echo '<script>alert("Por favor ingrese todos los campos obligatorios")</script>';
        $_SESSION['D'] = null;
        break;
      }
    case 2: 
      {
        echo '<script>alert("Mail ya utilizado")</script>';
        $_SESSION['D'] = null;
        break;
      }
  }
}
?>
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <form action="registro.php" method="post"> 
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellido">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
    <input class="controls" type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña">
    <input class="controls" type="number" name="tel" id="tel" placeholder="Telefono">
    <input class="controls" type="number" name="cel" id="cel" placeholder="Celular (opcional)">
    <label for="rubro">Seleccione el rubro a que se dedica(opcional)</label>
    <select name="rubro" id="rubro">
    <option  name="rubro" id="rubro" value="Instalador electricista">Instalador electricista</option>
    <option  name="rubro" id="rubro" value="Tablerista e integrador de sistemas">Tablerista e integrador de sistemas</option>
    <option  name="rubro" id="rubro" value="Industria">Industria</option>
    <option  name="rubro" id="rubro" value="Constructora">Constructora</option>
    <option  name="rubro" id="rubro" value="Automatista">Automatista</option>
    <option  name="rubro" id="rubro" value="Fabricacion de maquinas">Fabricación de maquinas</option>
    <option  name="rubro" id="rubro" value="Montaje electrico">Montaje electríco</option>
    <option  name="rubro" id="rubro" value="Mantenimiento electrico">Mantenimiento electríco</option>
    <option  name="rubro" id="rubro" value="Usuario final">Usuario final</option>
    <option  name="rubro" id="rubro" value="Ingenieria">Ingenieria</option>
    <option  name="rubro" id="rubro" value="Otro">Otro</option>
</select>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input  id = "boton" name = "boton" class="botons" type="submit" value="Registrar">
    </form>
    <p><a href="iniciar_sesion.html">Ya tengo Cuenta</a></p>
  </section>

</body>
</html>

   