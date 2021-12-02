<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');
  
    $sql = "DELETE FROM tb_usuarios WHERE id=$id";
    $result = mysqli_query($conexion, $sql);
    
    header('Location: ../views/usuarios/lista/');
