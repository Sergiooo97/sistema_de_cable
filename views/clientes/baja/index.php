<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'consultas.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dar de baja a cliente</h2>
        <div class="right-wrapper text-end">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="bx bx-home-alt"></i>
                    </a>
                </li>
                <li><span>Sistema</span></li>
                <li><span>Clientes</span></li>
                <li><span class="me-4">Baja</span></li>

            </ol>
        </div>
    </header>
    <!-- start: page -->

    <div class="container">
        <div class="card">
        <?php
        $resultS = mysqli_query($conexion, $cliente);
        while ($data = mysqli_fetch_array($resultS)) {
        ?>
            <div class="card-header">
               <h3>Dar de baja a <?php echo $data['nombres_cliente'] ?></h3> 
            </div>
            <div class="card-body">
           

            <form action="<?= url_controllers() ?>clientes.delete.php?id=<?php $data['id']?>" method="POST">

                <div class="row">
                <input value="<?php echo $data['id'] ?>" name="id_cliente" type="hidden"     readonly>

                    <div class="col-md-6">
                        <label>Nombres</label>
                        <input class="form-control" value="<?php echo $data['nombres_cliente'] ?>" name="nombres_cliente" type="text" placeholder="Ingrese nombre del cliente" required readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Apellido Paterno</label>
                        <input class="form-control" value="<?php echo $data['apellido_p_cliente'] ?>" name="apellido_p_cliente" type="text" placeholder="Ingrese apellido paterno del cliente" required readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Apellido Materno</label>
                        <input class="form-control" value="<?php echo $data['apellido_m_cliente'] ?>" name="apellido_m_cliente" type="text" placeholder="Ingrese apellido materno del cliente" required readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label>CURP</label>
                        <input class="form-control" value="<?php echo $data['curp_cliente'] ?>" name="curp_cliente" type="text" placeholder="Ingrese curp del cliente" required readonly>

                    </div>
                    <div class="col-sm-6">
                        <label>Id del cliente</label>
                        <input class="form-control" value="<?php echo $data['id'] ?>" name="id_cliente" type="text" placeholder="Ingrese la direccion" required readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label>Motivo de baja</label>
                        <textarea class="form-control" name="descripcion_baja" id="" cols="60" rows="6"></textarea>

                    </div>

                </div>
              
            </form>
        <?php
        }
        ?>
            </div>
            <div class="card-footer">
            <div style="margin-top: 1em;" class="col-12 ">

<input type="hidden" class="delete_id_value" value="<?php echo $data['id'] ?>" hidden>

<button type="submit" class="btn btn-danger register_delete_btn"><i class="fa fa-trash" aria-hidden="true"></i> Dar de baja</button>
</div>
            </div>
        </div>
        
    </div>

    </div>


    <?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>