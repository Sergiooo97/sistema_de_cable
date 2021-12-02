<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');


//create
$cliente_id = $_POST['cliente_id'];
$sucursal_id = $_POST['sucursal_id'];
$importe = $_POST['importe'];
$fecha = $_POST['fecha_pago'];


$sql = "INSERT INTO tb_mensualidades(cliente_id, sucursal_id, fecha, importe) 
        VALUES($cliente_id, $sucursal_id, '$fecha', $importe)";

//$result = mysqli_query($conexion, $sql);

if (($result = mysqli_query($conexion, $sql)) === false) {
    die(mysqli_error($conexion));
}
$time = strtotime($fecha);
$mes = date("m", $time);


setlocale(LC_ALL, 'es_CO.UTF-8');
$monthNum  =  $mes;
$dateObj   = DateTime::createFromFormat('!m', $monthNum);
$monthName = strftime('%B', $dateObj->getTimestamp());


$sqlUpdate = "UPDATE tb_control_de_pagos SET sucursal_id = $sucursal_id, cliente_id = $cliente_id, ultimo_pago = '$monthName', importe = $importe WHERE cliente_id = $cliente_id";
if (($resultu = mysqli_query($conexion, $sqlUpdate)) === false) {
    die(mysqli_error($conexion));
}
header('Location: ../views/control_de_pagos/mensualidades/');
