CREATE DATABASE cable;

CREATE TABLE tb_sucursales(
    id int NOT NULL AUTO_INCREMENT, 
    Nombre_sucursal VARCHAR(250), 
    direccion VARCHAR(250),
    municipio VARCHAR(250),  
    estado VARCHAR(250), 
    cp INT(10), 
    status INT(2),
    PRIMARY KEY(id) 
);

CREATE TABLE tb_usuarios(
    id int NOT NULL AUTO_INCREMENT,
    sucursal_id INT NOT NULL, 
    nombre VARCHAR(250), 
    usuario VARCHAR(250), 
    pass VARCHAR(250), 
    permisos VARCHAR(250), 
    status VARCHAR(10), 
    PRIMARY KEY(id),  
    FOREIGN KEY (sucursal_id) 
    REFERENCES tb_sucursales(id) 
);


CREATE TABLE tb_clientes(
    id int NOT NULL AUTO_INCREMENT,
    sucursal_id INT NOT NULL, 
    nombres_cliente VARCHAR(250), 
    apellido_p_cliente VARCHAR(250), 
    apellido_m_cliente VARCHAR(250), 
    direccion_cliente VARCHAR(250), 
    municipio_cliente VARCHAR(250), 
    cp_cliente VARCHAR(250), 
    estado_cliente VARCHAR(250), 
    curp_cliente VARCHAR(250), 
    PRIMARY KEY(id),  
    FOREIGN KEY (sucursal_id) 
    REFERENCES tb_sucursales(id) 
);



CREATE TABLE tb_mensualidades(
    id int NOT NULL AUTO_INCREMENT,
    sucursal_id INT NOT NULL, 
    cliente_id INT NOT NULL, 
    fecha date, 
    importe int(250), 
    No_nota int(250), 
    PRIMARY KEY(id),  
    FOREIGN KEY (sucursal_id) 
    REFERENCES tb_sucursales(id),
    FOREIGN KEY (cliente_id) 
    REFERENCES tb_clientes(id) 
);

CREATE TABLE tb_control_de_pagos(
    id int NOT NULL AUTO_INCREMENT,
    sucursal_id INT NOT NULL, 
    cliente_id INT NOT NULL, 
    ultimo_pago VARCHAR(250), 
    importe int(250), 
    No_nota int(250), 
    PRIMARY KEY(id),  
    FOREIGN KEY (sucursal_id) 
    REFERENCES tb_sucursales(id),
    FOREIGN KEY (cliente_id) 
    REFERENCES tb_clientes(id) 
);