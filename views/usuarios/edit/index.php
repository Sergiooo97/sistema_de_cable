<?php 
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'sistema'.DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php'); 
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'consultas.php'); 
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Nueva sucursal</h2>
        <div class="right-wrapper text-end">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="bx bx-home-alt"></i>
                    </a>
                </li>
                <li><span>Sistema</span></li>
                <li><span class="me-4">Sucursal</span></li>
            </ol>
        </div>
    </header>
    <!-- start: page -->

    <div class="container">
        <?php
        $usuariosWhereR = mysqli_query($conexion, $usuariosWhere);

        while ($data = mysqli_fetch_array($usuariosWhereR)) {
        ?>
            <form action="<?= url_controllers() ?>usuarios.update.php?id=<?php echo $data['id'] ?>" method="post">

                <div class="row">
                    <div class="col-sm-4">
                        <label>Nombre</label>
                        <input class="form-control" name="nombre" value="<?php echo $data['nombre'] ?>" type="text" placeholder="Ingrese nombre de usuario" required>
                    </div>
                    <div class="col-sm-4">
                        <label>Usuario</label>
                        <input class="form-control" name="usuario" value="<?php echo $data['usuario'] ?>" type="text" placeholder="Ingrese usuario" required>
                    </div>
                    <div class="col-sm-4">
                        <label>Contrasena</label>
                        <input name="pass" value="...." class="form-control" type="password" placeholder="Password" required readonly>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-4">
                        <label>Permisos</label>
                        <input class="form-control" name="permisos" value="<?php echo $data['permisos'] ?>" type="text" placeholder="permisos" required>
                    </div>
                    <div class="col-sm-4">
                        <label>Status</label>
                        <select class="form-select" aria-label="Default select example" required name="status">
                            <option value="<?php echo $data['status'] ?>" selected><?php echo $data['status'] ?></option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label>sucursal</label>
                        <select name="sucursal_id" class="form-select" aria-label="Default select example" required>
                            <option value="<?php echo $data['sucursal_id'] ?>" selected><?php echo $data['sucursal'] ?></option>
                            <?php

                            $sql = "SELECT * from tb_sucursales";
                            $result = mysqli_query($conexion, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <option value="<?php echo $data['id'] ?>"><?php echo $data['Nombre_sucursal'] ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>

                </div>

                <div class="row">


                    <button style="margin-top: 1.5em;" class="btn btn-success pull-right" type="submit">Guardar</button>


                </div>
            </form>
        <?php
        }
        ?>
    </div>



    <?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>