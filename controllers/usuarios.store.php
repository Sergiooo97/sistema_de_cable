<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');


//create
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$permisos = $_POST['permisos'];
$sucursal = $_POST['sucursal'];
$pass = $_POST['pass'];


$passwd = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
$status = $_POST['status'];


$sql = "INSERT INTO tb_usuarios(sucursal_id, nombre, usuario, permisos, pass, status) 
        VALUES($sucursal, '$nombre', '$usuario', '$permisos',  '$passwd', '$status')";

$result = mysqli_query($conexion, $sql);

if (($result = mysqli_query($conexion, $sql)) === false) {
        die(mysqli_error($conexion));
    }
header('Location: ../views/usuarios/create/');

