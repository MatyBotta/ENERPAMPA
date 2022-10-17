<?php
include "vendor/autoload.php";
require "db.php";
$eliminar = "DELETE from productos";
$borrar = $conexion -> query($eliminar);
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
$inputfilename = "Book1.xlsx";
$inputfiletype = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputfilename);
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputfiletype);
$spreadsheet = $reader -> load($inputfilename);
$cantidad = $spreadsheet -> getActiveSheet() -> toArray();
foreach($cantidad as $row)
{
    if($row[0] != "ID")
    {
        $insertar = "INSERT into productos(ID, Categoria, Denominacion, Marca, Caracteristicas) values
        ($row[0], '$row[1]', '$row[2]', '$row[3]', '$row[4]')";
        $agregar = $conexion -> query($insertar);
    }
}