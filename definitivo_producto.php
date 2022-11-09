<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
$codigo = $_POST['prod'];
$comprobacion = "SELECT Nombre, Marca, ID from productos where Codigo like '%$codigo'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    $_SESSION["info"] = $info[2];
    $comprobacion = "SELECT Count(*) from productos where Codigo like '%R_=$codigo'";
    $revisar =  $conexion -> query($comprobacion);
    $visado = $revisar -> fetch_array();
    if($visado[0] != 0)
    {
        ?>  
        <p>Seleccione el producto que desea eliminar</p>
        <form action="definicion.php" method="post"> 
        <input type="radio" id="A" value= <?php echo $info[2] ?> name="eleccion" ><label for="A"><?php echo $info[0] ?>, <?php echo $info[1] ?>, ID: <?php echo $info[2] ?></label>
        <?php
        $info2[2] = 0;
        for($i = 1; $i <= $visado[0]; $i++)
        {
            $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo like '%R_=$codigo' and ID > $info2[2] order by ID asc";
            $revisar2 =  $conexion -> query($comprobacion2);
            $info2 = $revisar2 -> fetch_array();
            ?>
            <input type="radio" id="A" value= <?php echo $info2[2] ?> name="eleccion" ><label for="A"><?php echo $info2[0] ?>, <?php echo $info2[1] ?>, ID: <?php echo $info2[2] ?></label>
            <?php
        }
        ?>
        <button type="submit">Enviar</button>
        </form>
        <?php
    }
    else
    {
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <p>¿Desea eliminar el producto de codigo <?php echo $codigo ?>?</p>
        <p> Nombre: <?php echo $info[0] ?></p>
        <p> Marca: <?php echo $info[1] ?></p>
        <p> ID: <?php echo $info[2] ?></p>
        <a href = "definicion.php">Confirmar</a>
        <a href = "definitivo.html">Cancelar</a>
        <?php
    }
}
else
{
    ?>
    <p>No existe un producto con determinado codigo.</p>
    <a href = "definitivo.html">Ingresar otro codigo</a>
    <?php
}