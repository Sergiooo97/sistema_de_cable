<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');


//create
$nombre = $_POST['nombres_cliente'];
$apellido_p = $_POST['apellido_p_cliente'];
$apellido_m = $_POST['apellido_m_cliente'];
$curp = $_POST['curp_cliente'];
$direccion = $_POST['direccion_cliente'];
$municipio = $_POST['municipio_cliente'];
$estado = $_POST['estado_cliente'];
$cp = $_POST['cp_cliente'];
$status = "ACTIVO";
$sucursal = $_POST['sucursal_id'];


$sql = "INSERT INTO tb_clientes(sucursal_id, nombres_cliente, apellido_p_cliente, apellido_m_cliente,  direccion_cliente, municipio_cliente, cp_cliente, estado_cliente, curp_cliente, status_cliente) VALUES($sucursal,'$nombre', '$apellido_p', '$apellido_m',   '$direccion',   '$municipio', '$cp','$estado', '$curp', '$status')";


//$result = mysqli_query($conexion, $sql);
if (($result = mysqli_query($conexion, $sql)) === false) {
    die(mysqli_error($conexion));
}



    $idCliente = mysqli_insert_id($conexion);
    $sqlControl = "INSERT INTO tb_control_de_pagos(sucursal_id, cliente_id, ultimo_pago, importe) VALUES($sucursal, $idCliente, 'ninguno', 0)";

//$result = mysqli_query($conexion, $sql);
if (($result2 = mysqli_query($conexion, $sqlControl)) === false) {
    die(mysqli_error($conexion));
}


header('Location: ../views/clientes/create/');
