<?php
include("db.php");
if(!isset($_SESSION))
{
    session_start();
}
$codigo = $_POST['prod'];
$_SESSION['prod'] = $codigo;
$comprobacion = "SELECT Nombre, Marca, ID from productos where Codigo = '$codigo'  and Estado != 'Eliminado'";
$revisar =  $conexion -> query($comprobacion);
$info = $revisar -> fetch_array();
if(empty($info[0]) === false)
{
    $comprobacion2 = "SELECT Count(*) from productos where Codigo like '%R_=$codigo'  and Estado != 'Eliminado'";
    $revisar2 =  $conexion -> query($comprobacion2);
    $visado = $revisar2 -> fetch_array();
    if($visado[0] != 0)
    {
        for($i = 1; $i <= $visado[0]; $i++)
        {
            ?>
            <p>Seleccione el producto que desea editar</p>
            <form action="edicion.php" method="post"> 
            <input type="radio" id="A" value= <?php echo $info[2] ?> name="eleccion" ><label for="A"><?php echo $info[0] ?>, <?php echo $info[1] ?>, ID: <?php echo $info[2] ?></label>
            <?php
            $info2[2] = 0;
            for($i = 1; $i <= $visado[0]; $i++)
            {
                $comprobacion2 = "SELECT Nombre, Marca, ID from productos where Codigo like '%R_=$codigo' and Estado != 'Eliminado' and ID > $info2[2] order by ID asc";
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
    ?> 
    <html>
    <body>
    <a href = "editar-producto.html">Cancelar</a>
    </body>
    </html>
    <?php
    }
    else
    {
        $_SESSION['eleccion'] = $info[2];
        ?> 
        <p> El codigo ingresado pertenece a:</p>
        <p> Nombre: <?php echo $info[0] ?></p>
        <p> Marca: <?php echo $info[1] ?></p>
        <p> ID: <?php echo $info[2] ?></p>
        <html>
        <body>
        <a href = "edicion.php">Continuar</a>
        <a href = "editar-producto.html">Cancelar</a>
        </body>
        </html>
        <?php
    }
}
else
{
    echo "Codigo no registrado en el sistema";
}