
<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
    $x = 0;
    if(empty($_POST['tel']) === true ) 
    {
        $tel = 0;
    }
    else
    {
        $tel = $_POST['tel'];
    }
    if(empty($_POST['cel']) === true ) 
    {
        $cel = 0;
    }
    else
    {
        $cel = $_POST['cel'];
    }
    if(empty($_POST['rubro']) === true ) 
    {
        $rubro = '-';
    }
    else
    {
        $rubro = $_POST['rubro'];
    }
    $mail = $_POST['correo'];
    $seleccionar = "SELECT * FROM usuario where Mail = '$mail'";
    $elegir =  $conexion -> query($seleccionar);
    $info = $elegir -> fetch_array();
    if(empty($info[0]) === true)
    {
        if(empty($_POST['nombres']) === false && empty($_POST['apellidos']) === false && empty($_POST['contrasenia']) === false)
        {
            $contrasenia = $_POST['contrasenia'];
            $nombre = $_POST['nombres'];
            $apellido = $_POST['apellidos'];
            $in  = "INSERT INTO usuario (Mail, Contrasenia, Nombre, Apellido, Tipo, Telefono, Celular, Rubro) values 
            ('$mail', '$contrasenia', '$nombre', '$apellido', 'Cliente', $tel, $cel, '$rubro')";
            $con =  $conexion -> query($in); 
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $hoy = date("Y-m-d, g:i a");
            $date = new DateTime($hoy);
            $fecha = $date->format('Y/m/d h:i:s A');
            $in2  = "INSERT INTO ingresos (Mail, Fecha) values ('$mail', '$fecha')";
            $con2 =  $conexion -> query($in2);
            ?>
            <section class="selec">
            <h2>Usuario registrado correctamente.</h2>
                <button type="submit"><i class="fa-solid fa-right-to-bracket"><a href = "index.html"></i>Ir a la página web</button>
        </section>
        </body> 
            <?php

        }
        else
        {
            $_SESSION['D'] = 1;
            header('Location:registrarse.php');
        }
    }
    else
    {
        $_SESSION['D'] = 2;
        header('Location:registrarse.php');
    }

