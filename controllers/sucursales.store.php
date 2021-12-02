<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');

    
//create
$nombre_sucursal = $_POST['nombre_sucursal'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$cp = $_POST['cp'];
$status ="ACTIVO";


$sql = "INSERT INTO tb_sucursales(Nombre_sucursal, direccion, municipio, estado, cp, status) 
        VALUES('$nombre_sucursal', '$direccion', '$municipio', '$estado', $cp, '$status')";


if (($result = mysqli_query($conexion, $sql)) === false) {
        die(mysqli_error($conexion));
    }
header('Location: ../views/sucursales/lista/');

