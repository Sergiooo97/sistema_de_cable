<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');

    
//create
$nombre_sucursal = $_POST['nombre_sucursal'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$cp = $_POST['cp'];
$status ="1";

$sql = "INSERT INTO tb_sucursales(Nombre_sucursal, direccion, municipio, estado, cp, status_sucursal) 
        VALUES('$nombre_sucursal', '$direccion', '$municipio', '$estado', $cp, '$status')";/*Query SQL para insertar datos a la tabla de sucursales */

if (($result = mysqli_query($conexion, $sql)) === false) {
        die(mysqli_error($conexion));
    }// Realiza la cohsulta o muestra un mensaje con el error de query.


header('Location: ../views/sucursales/lista/'); //Dirigir a la vista de lista de sucursales

