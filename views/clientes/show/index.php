<?php
define('_RAIZ', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'sistema' . DIRECTORY_SEPARATOR);
require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'app.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'consultas.php');
require_once(_RAIZ . 's_include_php' . DIRECTORY_SEPARATOR . 'conexion.php');
?>
<!-- end: sidebar -->
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Nuevo cliente</h2>
        <div class="right-wrapper text-end">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="bx bx-home-alt"></i>
                    </a>
                </li>
                <li><span>Sistema</span></li>
                <li><span class="me-4">Clientes</span></li>
            </ol>
        </div>
    </header>
    <!-- start: page -->

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Informacion del cliente</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $resultS = mysqli_query($conexion, $cliente);
                        while ($data = mysqli_fetch_array($resultS)) {
                        ?>
                            <form action="<?= url_controllers() ?>clientes.update.php?id=<?php echo $data['id'] ?>" method="POST">
                                <div class="row">
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
                                        <label>Direccion</label>
                                        <input class="form-control" value="<?php echo $data['direccion_cliente'] ?>" name="direccion_cliente" type="text" placeholder="Ingrese la direccion" required readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Municipio</label>
                                        <input class="form-control" value="<?php echo $data['municipio_cliente'] ?>" name="municipio_cliente" type="text" placeholder="Municipio" required readonly>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Estado</label>
                                        <input class="form-control" value="<?php echo $data['estado_cliente'] ?>" name="estado_cliente" type="text" placeholder="Estado" required readonly>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>C.P</label>
                                        <input name="cp_cliente" value="<?php echo $data['cp_cliente'] ?>" class="form-control" type="number" placeholder="cp	" required readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Sucursal</label>
                                        <select readonly class="form-select" aria-label="Default select example" required name="sucursal_id">
                                            <option value="<?php echo $data['sucursal_id'] ?>"><?php echo $data['sucursal'] ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                </div>
                            <?php
                        }
                            ?>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Mensualidades pagadas</h3>
                    </div>
                    <div class="card-body">
                        <div style=" overflow-x: auto;" class="container">
                            <table class="table display table-responsive table-hover table-bordered">
                                <thead text="primary">
                                    <th>Fecha ultimo mes pagado</th>
                                    <th>Importe</th>
                                    <th>No. Nota</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $resultS = mysqli_query($conexion, $mensualidades2);
                                    while ($data = mysqli_fetch_array($resultS)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['fecha'] ?></td>
                                            <td><?php echo $data['importe'] ?></td>
                                            <td><?php echo $data['id'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once(_RAIZ . 'views/layout' . DIRECTORY_SEPARATOR . 'footer_js.php'); ?>