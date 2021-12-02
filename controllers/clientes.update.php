<?php
    define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
    require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');
    

//create

//create
$nombre = $_POST['nombres_cliente'];
$apellido_p = $_POST['apellido_p_cliente'];
$apellido_m = $_POST['apellido_m_cliente'];
$curp = $_POST['curp_cliente'];
$direccion = $_POST['direccion_cliente'];
$municipio = $_POST['municipio_cliente'];
$estado = $_POST['estado_cliente'];
$cp = $_POST['cp_cliente'];
$sucursal = $_POST['sucursal_id'];



$sql = "UPDATE tb_clientes SET sucursal_id= $sucursal, nombres_cliente= '$nombre', apellido_p_cliente= '$apellido_p' , apellido_m_cliente=  '$apellido_m' , direccion_cliente= '$direccion', municipio_cliente= '$municipio' ,cp_cliente= '$cp' ,estado_cliente= '$estado' , curp_cliente= '$curp'   WHERE id=$id "; 
$result = mysqli_query($conexion, $sql);

$result = mysqli_query($conexion, $sql);
if (($result = mysqli_query($conexion, $sql)) === false) {
        die(mysqli_error($conexion));
    }



header('Location: ../views/clientes');

