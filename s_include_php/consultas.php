<?php

define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');


$usuarios = "SELECT 
        tb_usuarios.id,
        tb_usuarios.nombre,
        tb_usuarios.usuario,
        tb_usuarios.permisos,
        tb_usuarios.status,
        tb_sucursales.id as sucursal_id,
        tb_sucursales.Nombre_sucursal as sucursal
     from tb_usuarios INNER JOIN tb_sucursales ON tb_usuarios.sucursal_id=tb_sucursales.id";

$clientes = "SELECT 
        tb_clientes.id,
        tb_clientes.nombres_cliente,
        tb_clientes.direccion_cliente,
        tb_clientes.municipio_cliente,
        tb_clientes.status_cliente,
        tb_sucursales.id as sucursal_id,
        tb_sucursales.Nombre_sucursal as Nombre_sucursal
     from tb_clientes INNER JOIN tb_sucursales ON tb_clientes.sucursal_id=tb_sucursales.id WHERE tb_clientes.status_cliente='ACTIVO'";

$cliente = "SELECT 
        tb_clientes.id,
        tb_clientes.nombres_cliente,
        tb_clientes.apellido_p_cliente,
        tb_clientes.apellido_m_cliente,

        tb_clientes.estado_cliente,
        tb_clientes.curp_cliente,
        tb_clientes.cp_cliente,

        tb_clientes.direccion_cliente,
        tb_clientes.municipio_cliente,
        tb_sucursales.id as sucursal_id,
        tb_sucursales.Nombre_sucursal as sucursal
     from tb_clientes INNER JOIN tb_sucursales ON tb_clientes.sucursal_id=tb_sucursales.id WHERE tb_clientes.id=$id";


$usuariosWhere = "SELECT 
        tb_usuarios.id,
        tb_usuarios.nombre,
        tb_usuarios.usuario,
        tb_usuarios.permisos,
        tb_usuarios.status,
        tb_sucursales.id as sucursal_id,
        tb_sucursales.Nombre_sucursal as sucursal
    from tb_usuarios INNER JOIN tb_sucursales ON tb_usuarios.sucursal_id=tb_sucursales.id WHERE tb_usuarios.id = $id";




$mensualidades = "SELECT *
     from tb_control_de_pagos 
     INNER JOIN tb_sucursales ON tb_control_de_pagos.sucursal_id=tb_sucursales.id 
     INNER JOIN tb_clientes ON tb_control_de_pagos.cliente_id=tb_clientes.id   
     WHERE tb_clientes.status_cliente='ACTIVO'";

$mensualidades2 = "SELECT * FROM tb_mensualidades WHERE cliente_id = $id ";

