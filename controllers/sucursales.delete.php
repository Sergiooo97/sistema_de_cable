<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');
  
    $sql = "DELETE FROM tb_sucursales WHERE id=$id";
    $result = mysqli_query($conexion, $sql);
    if (($result = mysqli_query($conexion, $sql)) === false) {
            die(mysqli_error($conexion));
        }
    
        
    header('Location: ../views/sucursales/lista/');
