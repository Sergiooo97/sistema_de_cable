<?php
    define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
    require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');
    

//create
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$permisos = $_POST['permisos'];
$sucursal_id = $_POST['sucursal_id'];
$status = $_POST['status'];


$sql = "UPDATE tb_usuarios SET sucursal_id= $sucursal_id, nombre= '$nombre', usuario= '$usuario' , permisos=  '$permisos' , status= '$status' WHERE id=$id "; 
$result = mysqli_query($conexion, $sql);

header('Location: ../views/usuarios/lista/');

