<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
if(empty($_POST['eleccion']) === false || empty($_SESSION['eleccion']) === false)
{
    if(empty($_POST['eleccion']) === false)
    {
        $ID = $_POST['eleccion'];
    }
    if(empty($_SESSION['eleccion']) === false)
    {
        $ID = $_SESSION['eleccion'];
    }
    $_SESSION['ID'] = $ID;
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
?>
<h2 id="h2">Ingresar datos del producto a editar con codigo: <?php echo $info1[4] ?></h2>
            <form action="subir_edicion.php" method="post">
            <h3>Nombre</h3>
            <input step="any" type="text"  name="nombre" value="" placeholder = "<?php echo $info1[2]?>">           
        <br>
            <h3>Codigo</h3>
                <input step="any" type="text"  name="codigo" value="" placeholder = "<?php echo $info1[4]?>">           
            <br>
            <h3>Marca</h3>
            <input step="any" type="text" name="marca" value="" placeholder = "<?php echo $info1[3]?>">
            <br>
            <h3>Cantidad</h3>
            <input step="any" type="text" name="cantidad" value="" placeholder = "<?php echo $info1[5]?>">
        <fieldset id="cat">
        <legend>Categoria ("<?php echo $info1[1]?>" es la categoria actual)</legend>
        <input type="radio" id= 1 value= 1 name="cat"><label for="A">Control de Potencia</label>
        <input type="radio" id= 2 value= 2 name="cat"><label for="B">Automatización</label>
        <input type="radio" id= 3 value= 3 name="cat"><label for="C">Distribución eléctrica domestica</label>
        <input type="radio" id= 4 value= 4 name="cat"><label for="D">Accesorios</label>
        <input type="radio" id= 5 value= 5 name="cat"><label for="E">Distribución eléctrica industrial</label>
        <input type="radio" id= 6 value= 6 name="cat"><label for="E">Monitoreo de redes e instrumentos</label>
</fieldset>
        <br>
            <h3>Caracteristicas</h3>
            <input type="text" name="carac1" value="" placeholder = "<?php echo $info3[1][0]?>">
            <?php
            if(empty($info3[2][0]) == true)
            {
                ?>
                <input type="text" name="carac2" value="" placeholder = "Caracteristica 2">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac2" value="" placeholder = "<?php echo $info3[2][0]?>">
                <?php
            }
            if(empty($info3[3][0]) == true)
            {
                ?>
                <input type="text" name="carac3" value="" placeholder = "Caracteristica 3">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac3" value="" placeholder = "<?php echo $info3[3][0]?>">
                <?php
            }
            if(empty($info3[4][0]) == true)
            {
                ?>
                <input type="text" name="carac4" value="" placeholder = "Caracteristica 4">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac4" value="" placeholder = "<?php echo $info3[4][0]?>">
                <?php
            }
            if(empty($info3[5][0]) == true)
            {
                ?>
                <input type="text" name="carac5" value="" placeholder = "Caracteristica 5">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac5" value="" placeholder = "<?php echo $info3[5][0]?>">
                <?php
            }
            if(empty($info3[6][0]) == true)
            {
                ?>
                <input type="text" name="carac6" value="" placeholder = "Caracteristica 6">
                <?php
            }
            else
            {
                ?>
                <input type="text" name="carac6" value="" placeholder = "<?php echo $info3[6][0]?>">
                <?php
            }
        ?>
        <br>
        <button type="submit">Enviar</button>
        <a href = "agregar-producto.php">Cancelar</a>
        <?php
        }
        else
        {
            ?>
            <p> No ingreso ninguna opcion. </p>
            <a href = "eliminar-producto.html">Volver a ingresar codigo</a>
            <?php
        }