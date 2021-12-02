<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');


$status_cliente = "INACTIVO";
$id_cliente = $_POST['id_cliente'];
$sql = "UPDATE tb_clientes SET   status_cliente= '$status_cliente'   WHERE id=$id_cliente "; 

$result = mysqli_query($conexion, $sql);
if (($result = mysqli_query($conexion, $sql)) === false) {
        die(mysqli_error($conexion));
    }

header('Location: ../views/clientes');
