<?php 
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'sistema'.DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php'); 
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
        <form action="<?= url_controllers()?>usuarios.store.php" method="post">

            <div class="row">
                <div class="col-sm-4">
                    <label>Nombre</label>
                    <input class="form-control" name="nombre" type="text" placeholder="Ingrese nombre de usuario" required>
                </div>
                <div class="col-sm-4">
                    <label>Usuario</label>
                    <input class="form-control" name="usuario" type="text" placeholder="Ingrese usuario" required>
                </div>
                <div class="col-sm-4">
                <label>Contrasena</label>
                    <input name="pass" class="form-control" type="password" placeholder="Password" required>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-4">
                    <label>Permisos</label>
                    <select class="form-select" aria-label="Default select example" name="permisos" required> 
                        <option selected>seleccionar</option>
                        <option value="CAJA">CAJA</option>
                        <option value="TECNICO">TECNICO</option>
                        <option value="SUPERVISOR">SUPERVISOR</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label>sucursal</label>
                    <select class="form-select" aria-label="Default select example" required name="sucursal">
                        <option selected>Seleccionar</option>
                        <?php
                        
                        $sql = "SELECT * from tb_sucursales";
                        $resultS = mysqli_query($conexion, $sql);
                        while ($data = mysqli_fetch_array($resultS)) {
                        ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data['Nombre_sucursal'] ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="col-sm-4">
                    <label>Status</label>
                    <select class="form-select" aria-label="Default select example" name="status" required> 
                        <option selected>seleccionar</option>
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select>
                </div>
            </div>

            <div class="row">

              
                    <button style="margin-top: 1.5em;" class="btn btn-success pull-right" type="submit">Guardar</button>

              
            </div>
        </form>

    </div>



    <?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>