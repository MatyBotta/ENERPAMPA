<?php
include("db.php");
session_start();
    ?>
    <html>
        <body>
            <h2>Ingresar nuevo producto</h2>   
            <hr />
            <form action="agregar_producto.php" method="post"> 
            <br>
            <h3>Codigo del nuevo producto</h3>   
            <p><input type="text" name="prod" id="prod"></p> 
            </div>   
            <ul><li><button type="submit">Ingresar</button></li></ul>
        </body>
    </html>
    <?php