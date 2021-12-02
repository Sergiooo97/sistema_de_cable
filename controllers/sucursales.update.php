<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');

//create
$nombre_sucursal = $_POST['nombre_sucursal'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$cp = $_POST['cp'];
$status = $_POST['status'];


$sql = "UPDATE tb_sucursales SET Nombre_sucursal= '$nombre_sucursal', direccion= '$direccion' , municipio=  '$municipio' , estado= '$estado' , cp= $cp , status= '$status'  WHERE id= $id ";

$result = mysqli_query($conexion, $sql);

header('Location: ../views/sucursales/lista/');
